<?php
class Petugas extends WP_Widget {
	function __construct() {
		parent::__construct(
			'petugas_harian',
			esc_html__( 'WPM : Petugas Harian', 'wpmasjid' ),
			array( 'description' => esc_html__( 'Widget ini digunakan untuk menampilkan Petugas Harian', 'wpmasjid' ), 'customize_selective_refresh' => true, )
		);
	}

	public function widget( $args, $instance ) {
		if ( ! isset( $args['widget_id'] ) ) {
			$args['widget_id'] = $this->id;
		}

		$title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : __( 'Petugas Harian' );

		/** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
		$title = apply_filters( 'widget_title', $title, $instance, $this->id_base );

		echo $args['before_widget']; 
		
		if ( $title ) {
			echo $args['before_title'] . $title . $args['after_title'];
		}
		
        echo '<div class="sdtable">';
		echo '<table>';

		?>
		
		<tr>
		    <td>SUBUH</td>
			<td><?php if (get_option('imam-subuh')) { echo get_option('imam-subuh'); } ?></td>
			<td><?php if (get_option('muadzin-subuh')) { echo get_option('muadzin-subuh'); } ?></td>
		</tr>
		<tr>
		    <td>DZUHUR</td>
			<td><?php if (get_option('imam-dzuhur')) { echo get_option('imam-dzuhur'); } ?></td>
			<td><?php if (get_option('muadzin-dzuhur')) { echo get_option('muadzin-dzuhur'); } ?></td>
		</tr>
		<tr>
		    <td>ASHAR</td>
			<td><?php if (get_option('imam-ashar')) { echo get_option('imam-ashar'); } ?></td>
			<td><?php if (get_option('muadzin-ashar')) { echo get_option('muadzin-ashar'); } ?></td>
		</tr>
		<tr>
		    <td>MAGHRIB</td>
			<td><?php if (get_option('imam-maghrib')) { echo get_option('imam-maghrib'); } ?></td>
			<td><?php if (get_option('muadzin-maghrib')) { echo get_option('muadzin-maghrib'); } ?></td>
		</tr>
		<tr>
		    <td>ISYA</td>
			<td><?php if (get_option('imam-isya')) { echo get_option('imam-isya'); } ?></td>
			<td><?php if (get_option('muadzin-isya')) { echo get_option('muadzin-isya'); } ?></td>
		</tr>
		

		<?php
		echo '</table>';
		echo '</div>';
		
		echo $args['after_widget'];
	}


	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = sanitize_text_field( $new_instance['title'] );
		return $instance;
	}


	public function form( $instance ) {
		$title     = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : 'Petugas Harian'; ?>
		<p>Widget ini digunakan untuk menampilkan daftar 5 infaq terbaru di sidebar<br/></p>
		<p><label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title :' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" /></p>
 
    <?php
	}
}
