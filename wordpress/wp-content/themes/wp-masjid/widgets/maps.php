<?php
class MasjidMaps extends WP_Widget {
	function __construct() {
		parent::__construct(
			'masjidmaps',
			esc_html__( 'WPM : Maps Masjid', 'wpmasjid' ),
			array( 'description' => esc_html__( 'Widget ini digunakan untuk menampilkan Google Maps', 'wpmasjid' ), 'customize_selective_refresh' => true, )
		);
	}

	public function widget( $args, $instance ) {
		if ( ! isset( $args['widget_id'] ) ) {
			$args['widget_id'] = $this->id;
		}

		$title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : __( 'Maps Masjid' );
		$maps_height = ( ! empty( $instance['maps_height'] ) ) ? $instance['maps_height'] : __( '300px' );

		/** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
		$title = apply_filters( 'widget_title', $title, $instance, $this->id_base );

		echo $args['before_widget']; 
		
		if ( $title ) {
			echo $args['before_title'] . $title . $args['after_title'];
		}
		?>
		
			<script>
    	var myCenter=new google.maps.LatLng(<?php echo (get_option('maps')) ? get_option('maps').'' : '-5.932330,105.992419' ?>);
		function initMap() {
	    	var mapProp = {
			center:myCenter,
			zoom:15,
			mapTypeId:google.maps.MapTypeId.ROADMAP
	    	};
		
    		var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
    		var marker=new google.maps.Marker({
        		position:myCenter,
    			title: 'Click to zoom',
    			icon:"<?php echo get_template_directory_uri(); ?>/images/maps.png"
    		});
		
	    	marker.setMap(map);
		}
		google.maps.event.addDomListener(window, 'load', initMap);
	</script>
		
            <style>
			.outmaps iframe {
				height:<?php echo $maps_height; ?>;
				width: 100% !important;
			}
			</style>
	    	<div class="outmaps">
			    <?php if (get_option('embedmaps')) { ?>
				    <?php echo get_option('embedmaps'); ?>
				<?php } else { ?>
	        	    <div id="googleMap" style="width:100%; height:<?php echo $maps_height; ?>; margin: 0;"></div>
				<?php } ?>
			    <div class="wamaps">
				    <h2><?php echo (get_option('nama')) ? get_option('nama') : 'Masjid At-Taqwa' ?></h2>
					<?php if (get_option('tahun')) { echo '<div class="wco">Tahun Berdiri : '.get_option('tahun').'</div>'; } ?>
					<div>
					    <div class="wco">
				    	<?php echo (get_option('alamat')) ? get_option('alamat') : 'Jalan Kerikil Tajam No. 39' ?>, <?php echo (get_option('kelurahan')) ? get_option('kelurahan') : 'Gunung Agung' ?>, <?php echo (get_option('kecamatan')) ? get_option('kecamatan') : 'Sawahan' ?>, <?php echo (get_option('kabupaten')) ? get_option('kabupaten') : 'Surabaya' ?>, <?php echo (get_option('provinsi')) ? get_option('provinsi') : 'Jawa Timur' ?> , <?php echo (get_option('kodepos')) ? get_option('kodepos') : '' ?><br/><br/>
						</div>
						<div class="wco">Telp : <strong><?php echo (get_option('telepon')) ? get_option('telepon') : '0800000000' ?></strong></div>
						<?php if (get_option('fax')) { echo '<div class="wco">Fax : <strong>'.get_option('fax').'</strong></div>'; } ?>
						<?php if (get_option('email')) { echo '<div class="wco">Email : '.get_option('email').'</div>'; } ?>
						<div class="wco">
						<?php if (get_option('facebook')) { echo '<a href="'.get_option('facebook').'"><i class="fab fa-facebook"></i></a>'; } ?>
						<?php if (get_option('twitter')) { echo '<a href="'.get_option('twitter').'"><i class="fab fa-twitter"></i></a>'; } ?>
						<?php if (get_option('instagram')) { echo '<a href="'.get_option('instagram').'"><i class="fab fa-instagram"></i></a>'; } ?>
						<?php if (get_option('youtube')) { echo '<a href="'.get_option('youtube').'"><i class="fab fa-youtube"></i></a>'; } ?>
						</div>
					</div>
				</div>
			</div>
        
		<?php
		echo $args['after_widget'];
	}


	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = sanitize_text_field( $new_instance['title'] );
		$instance['maps_height'] = sanitize_text_field( $new_instance['maps_height'] );
		return $instance;
	}


	public function form( $instance ) {
		$title     = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : 'Maps Masjid';
		$maps_height     = isset( $instance['maps_height'] ) ? esc_attr( $instance['maps_height'] ) : ''; ?>
		<p>Widget ini digunakan untuk menampilkan Maps lokasi Masjid di sidebar, pengaturan Maps ada di halaman <a href="<?php echo site_url( '/wp-admin/admin.php?page=wp-masjid' ); ?>">Pengaturan</a><br/></p>
		<p><label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title :' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" /></p>
		
		<p><label for="<?php echo $this->get_field_id( 'maps_height' ); ?>"><?php _e( 'Tinggi Maps :' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'maps_height' ); ?>" placeholder="300px" name="<?php echo $this->get_field_name( 'maps_height' ); ?>" type="text" value="<?php echo $maps_height; ?>" /></p>

    <?php
	}
}
