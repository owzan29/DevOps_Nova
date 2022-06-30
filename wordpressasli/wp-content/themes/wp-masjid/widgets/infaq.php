<?php
class LapInfaq extends WP_Widget {
	function __construct() {
		parent::__construct(
			'infaq_terbaru',
			esc_html__( 'WPM : Infaq Terbaru', 'wpmasjid' ),
			array( 'description' => esc_html__( 'Widget ini digunakan untuk menampilkan Post Infaq', 'wpmasjid' ), 'customize_selective_refresh' => true, )
		);
	}

	public function widget( $args, $instance ) {
		if ( ! isset( $args['widget_id'] ) ) {
			$args['widget_id'] = $this->id;
		}

		$title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : __( 'Infaq Terbaru' );

		/** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
		$title = apply_filters( 'widget_title', $title, $instance, $this->id_base );
		
		global $post;
		
		$q_args = array( 
			'post_type' => 'infaq', 
			'numberposts' => 5,
			'meta_key' => '_status',
		    'meta_query' => array(
			    array(
				    'key' => '_status',
				    'value' => 'masuk',
				)
			)
		); 
			
		$rpthumb_posts = get_posts($q_args);

		echo $args['before_widget']; 
		
		if ( $title ) {
			echo $args['before_title'] . $title . $args['after_title'];
		}
		
        echo '<div class="sdtable">';
		echo '<table>';
		echo '<tr><td><strong>Jumlah</strong></td><td><strong>Peng-Infaq</strong></td></tr>';
		foreach ($rpthumb_posts as $post):
			setup_postdata($post);
		?>

		<tr>
			<td><strong><?php echo 'Rp. '.get_post_meta($post->ID, '_juminfaq', true); ?></strong></td>
			<td><?php the_title(); ?></td>
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
		$title     = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : 'Infaq Terbaru'; ?>
		<p>Widget ini digunakan untuk menampilkan daftar 5 infaq terbaru di sidebar<br/></p>
		<p><label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title :' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" /></p>
 
    <?php
	}
}
