<?php
class GalVideos extends WP_Widget {
	function __construct() {
		parent::__construct(
			'galerivideo',
			esc_html__( 'WPM : Video Terbaru', 'wpmasjid' ),
			array( 'description' => esc_html__( 'Widget ini digunakan untuk menampilkan 1 video terbaru', 'wpmasjid' ), 'customize_selective_refresh' => true, )
		);
	}

		public function widget( $args, $instance ) {
		if ( ! isset( $args['widget_id'] ) ) {
			$args['widget_id'] = $this->id;
		}

		$title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : __( 'Video Terbaru' );

		/** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
		$title = apply_filters( 'widget_title', $title, $instance, $this->id_base );
		
		global $post;
		
		$q_args = array( 
			'post_type' => 'video', 
			'numberposts' => 1,
			); 
			
		$rpthumb_posts = get_posts($q_args);

		echo $args['before_widget']; 
		
		if ( $title ) {
			echo $args['before_title'] . $title . $args['after_title'];
		}
		
		foreach ($rpthumb_posts as $post):
			setup_postdata($post);
		?>

		<iframe class="vibar" src="https://www.youtube.com/embed/<?php echo get_post_meta($post->ID, '_embed', true); ?>" frameborder="0" allowfullscreen></iframe>

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
		$title     = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : 'Video Terbaru'; ?>
		<p>Widget ini digunakan untuk menampilkan 1 video di sidebar<br/></p>
		<p><label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title :' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" /></p>
 
    <?php
	}
}