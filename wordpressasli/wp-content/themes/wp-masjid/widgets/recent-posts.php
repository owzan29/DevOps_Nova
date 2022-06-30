<?php
class Recentposts_thumbnail extends WP_Widget {
	function __construct() {
		parent::__construct(
			'recentposts_thumbnail',
			esc_html__( 'WPM : Berita Terbaru', 'wpmasjid' ),
			array( 'description' => esc_html__( 'Widget ini digunakan untuk menampilkan Artikel terbaru', 'wpmasjid' ), 'customize_selective_refresh' => true, )
		);
	}

	public function widget( $args, $instance ) {
		if ( ! isset( $args['widget_id'] ) ) {
			$args['widget_id'] = $this->id;
		}
		
		$title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : __( 'Berita Terbaru' );
		
		/** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
		$title = apply_filters( 'widget_title', $title, $instance, $this->id_base );
		
		$berita = ( ! empty( $instance['berita'] ) ) ? absint( $instance['berita'] ) : 5;
		if ( ! $berita ) {
			$berita = 5;
		}
		
		global $post;
		
		$q_args = array( 
			'post_type' => 'post', 
			'numberposts' => $berita,
			); 
		
		$rpthumb_posts = get_posts($q_args);

        echo $args['before_widget'];

		if ( $title ) {
			echo $args['before_title'] . $title . $args['after_title'];
		}

		foreach ($rpthumb_posts as $post):
			setup_postdata($post);
		
		?>
		
		<div class="wagenda">

		<a href="<?php the_permalink(); ?>" class="rpthumb clear">
			<?php if (has_post_thumbnail() && !get_option('rpthumb_thumb')) {
				the_post_thumbnail('mini-thumbnail');
			}
			?>
			<span class="rpthumb-title"><?php the_title(); ?></span><br/>
			<span class="rpdate"><?php the_time('M j, Y'); ?></span>
		</a>
		
		</div>

		<?php
		endforeach;
		
		echo $args['after_widget'];
	}

	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = sanitize_text_field( $new_instance['title'] );
		$instance['berita'] = sanitize_text_field( $new_instance['berita'] );
		return $instance;
	}
	
	public function form( $instance ) {
		$title     = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : 'Berita Terbaru';
		$berita     = isset( $instance['berita'] ) ? esc_attr( $instance['berita'] ) : 5; ?>
		<p>Widget ini digunakan untuk menampilkan daftar Artikel terbaru di sidebar<br/></p>
		<p><label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title :' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" /></p>
		
		<p><label for="<?php echo $this->get_field_id( 'berita' ); ?>"><?php _e( 'Jumlah pos :' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'berita' ); ?>" name="<?php echo $this->get_field_name( 'berita' ); ?>" type="number" value="<?php echo $berita; ?>" /></p>

    <?php
	}


}
