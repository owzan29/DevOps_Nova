<?php
class LapWakaf extends WP_Widget {
	function __construct() {
		parent::__construct(
			'wakaf_terbaru',
			esc_html__( 'WPM : Laporan Wakaf', 'wpmasjid' ),
			array( 'description' => esc_html__( 'Widget ini digunakan untuk menampilkan Post Wakaf', 'wpmasjid' ), 'customize_selective_refresh' => true, )
		);
	}

	public function widget( $args, $instance ) {
		if ( ! isset( $args['widget_id'] ) ) {
			$args['widget_id'] = $this->id;
		}

		$title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : __( 'Laporan Wakaf' );

		/** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
		$title = apply_filters( 'widget_title', $title, $instance, $this->id_base );
		
		global $post;
		
		$q_args = array( 
			'post_type' => 'wakaf', 
			'numberposts' => 5,
			); 
			
		$rpthumb_posts = get_posts($q_args);

		echo $args['before_widget']; 
		
		if ( $title ) {
			echo $args['before_title'] . $title . $args['after_title'];
		}
		
        foreach ($rpthumb_posts as $post):
			setup_postdata($post);
			
			global $post;
				$tangwakaf = get_post_meta($post->ID, '_tangwakaf', true);
	            $jumwakaf = get_post_meta($post->ID, '_jumwakaf', true);
	        	$asalwakaf = get_post_meta($post->ID, '_asalwakaf', true);
		
		?>
		
		<div class="wagenda">

		<a href="<?php the_permalink(); ?>" class="rpthumb clear">
			<?php if (has_post_thumbnail() && !get_option('rpthumb_thumb')) {
				the_post_thumbnail('mini-thumbnail');
			}
			else $offset = '';
			?>
			<span class="rpthumb-title"<?php echo $offset; ?>><?php echo $jumwakaf; ?></span><br/>
			<span class="rpdate"<?php echo $offset; ?>>Tanggal : <?php echo $tangwakaf; ?></span><br/>
			<span class="rpthumb-title"<?php echo $offset; ?>>Dari : <?php the_title(); ?></span>
		</a>
		
		</div>

		<?php
		endforeach;
		
		echo $args['after_widget'];
	}


	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = sanitize_text_field( $new_instance['title'] );
		return $instance;
	}


	public function form( $instance ) {
		$title     = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : 'Laporan Wakaf'; ?>
		<p>Widget ini digunakan untuk menampilkan daftar 5 wakaf terbaru di sidebar<br/></p>
		<p><label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title :' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" /></p>
 
    <?php
	}
}
