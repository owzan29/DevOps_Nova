<?php
class Agenda extends WP_Widget {
	function __construct() {
		parent::__construct(
			'agenda',
			esc_html__( 'WPM : Agenda', 'wpmasjid' ),
			array( 'description' => esc_html__( 'Widget ini digunakan untuk menampilkan Post Agenda', 'wpmasjid' ), 'customize_selective_refresh' => true, )
		);
	}

	public function widget( $args, $instance ) {
		if ( ! isset( $args['widget_id'] ) ) {
			$args['widget_id'] = $this->id;
		}

		$title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : __( 'Agenda' );

		/** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
		$title = apply_filters( 'widget_title', $title, $instance, $this->id_base );
		
		$wagenda = ( ! empty( $instance['wagenda'] ) ) ? absint( $instance['wagenda'] ) : 5;
		if ( ! $wagenda ) {
			$wagenda = 5;
		}
		
		global $post;
		
        $today = strtotime(date('d-m-Y'));
		$q_args = array( 
			'post_type' => 'event', 
			'numberposts' => $wagenda,
			'meta_key' => '_minus',
			'meta_query' => array(
				array(
				'key' => '_minus',
				'value' => $today,
				'compare' => '>='
				)
			),
			'orderby' => 'meta_value',
			'order' => 'ASC'
			); 
		
		$rpthumb_posts = get_posts($q_args);
		$tanggalan = get_post_meta($post->ID, '_tevent', true);
		$minus = strtotime(get_post_meta($post->ID, '_tevent', true));
		$jam = get_post_meta($post->ID, '_jam', true);


		echo $args['before_widget']; 
		
		if ( $title ) {
			echo $args['before_title'] . $title . $args['after_title'];
		}
		
		foreach ($rpthumb_posts as $post):
			setup_postdata($post);
		
		?>
		
		<div class="wagenda">

		<a href="<?php the_permalink(); ?>" class="rpthumb clear">
			
			<span><i class="far fa-clock"></i> <?php echo get_post_meta($post->ID, '_jam', true); ?> - <?php echo get_post_meta($post->ID, '_tevent', true); ?></span><br/>
			<strong><?php the_title(); ?></strong><br/>
			<span>
			INFO : <?php echo get_post_meta($post->ID, '_koordinator', true); ?> / <?php echo get_post_meta($post->ID, '_telepon', true); ?>
			</span>
		</a>
		
		</div>
        
		<?php
		
		endforeach;
		
		echo $args['after_widget'];
	}


	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = sanitize_text_field( $new_instance['title'] );
		$instance['wagenda'] = sanitize_text_field( $new_instance['wagenda'] );
		return $instance;
	}


	public function form( $instance ) {
		$title     = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : 'Agenda';
		$wagenda     = isset( $instance['wagenda'] ) ? esc_attr( $instance['wagenda'] ) : 5; ?>
		<p>Widget ini digunakan untuk menampilkan daftar Agenda Masjid terbaru di sidebar<br/></p>
		<p><label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title :' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" /></p>
		
		<p><label for="<?php echo $this->get_field_id( 'wagenda' ); ?>"><?php _e( 'Jumlah pos :' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'wagenda' ); ?>" name="<?php echo $this->get_field_name( 'wagenda' ); ?>" type="number" value="<?php echo $wagenda; ?>" /></p>

    <?php
	}
}
