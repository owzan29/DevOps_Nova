<?php
class Layanan extends WP_Widget {
	function __construct() {
		parent::__construct(
			'layanan',
			esc_html__( 'WPM : Layanan', 'wpmasjid' ),
			array( 'description' => esc_html__( 'Widget ini digunakan untuk menampilkan daftar Layanan', 'wpmasjid' ), 'customize_selective_refresh' => true, )
		);
	}

	public function widget( $args, $instance ) {
		if ( ! isset( $args['widget_id'] ) ) {
			$args['widget_id'] = $this->id;
		}
		
		$title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : __( 'Layanan Terbaru' );
		
		/** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
		$title = apply_filters( 'widget_title', $title, $instance, $this->id_base );
		
		global $post;
		
		$q_args = array( 
			'post_type' => 'layanan', 
			'numberposts' => 25,
			); 
		
		$rpthumb_posts = get_posts($q_args);

        echo $args['before_widget'];

		if ( $title ) {
			echo $args['before_title'] . $title . $args['after_title'];
		}
		
		echo '<div class="sdtable">';
		echo '<table>';
		echo '<tr><td><strong>LAYANAN</strong></td><td><strong>INFORMASI</strong></td></tr>';

		foreach ($rpthumb_posts as $post):
			setup_postdata($post);
		
		?>

		<tr>
			<td><strong><?php the_title(); ?></strong></td>
			<td><?php echo get_post_meta($post->ID, '_informasi', true); ?></td>
		</tr>

		<?php
		endforeach;
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
		$title     = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : 'Layanan'; ?>
		<p>Widget ini digunakan untuk menampilkan daftar Layanan di sidebar<br/></p>
		<p><label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title :' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" /></p>
		
    <?php
	}


}
