<?php
class Pengumuman extends WP_Widget {
	function __construct() {
		parent::__construct(
			'pengumuman',
			esc_html__( 'WPM : Pengumuman', 'wpmasjid' ),
			array( 'description' => esc_html__( 'Widget ini digunakan untuk menampilkan Pengumuman terbaru', 'wpmasjid' ), 'customize_selective_refresh' => true, )
		);
	}

	public function widget( $args, $instance ) {
		if ( ! isset( $args['widget_id'] ) ) {
			$args['widget_id'] = $this->id;
		}
		
		$title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : __( 'Pengumuman' );
		
		/** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
		$title = apply_filters( 'widget_title', $title, $instance, $this->id_base );
		
		$pengumuman = ( ! empty( $instance['pengumuman'] ) ) ? absint( $instance['pengumuman'] ) : 5;
		if ( ! $pengumuman ) {
			$pengumuman = 5;
		}
		
		global $post;
		
		$q_args = array( 
			'post_type' => 'pengumuman', 
			'numberposts' => $pengumuman,
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
			else $offset = '';
			?>
			<span class="rpthumb-title"<?php echo $offset; ?>><?php the_title(); ?></span><br/>
			<span class="rpthumb-date"<?php echo $offset; ?>><?php printf(__('<i class="far fa-clock"></i> <em>%s</em>', 'wpmasjid'),
					                    get_the_time('l, j M Y')
				                    	); ?></span>
		</a>
		
		</div>

		<?php
		endforeach;
		
		echo $args['after_widget'];
	}

	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = sanitize_text_field( $new_instance['title'] );
		$instance['pengumuman'] = sanitize_text_field( $new_instance['pengumuman'] );
		return $instance;
	}
	
	public function form( $instance ) {
		$title     = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : 'Pengumuman';
		$pengumuman     = isset( $instance['pengumuman'] ) ? esc_attr( $instance['pengumuman'] ) : 5; ?>
		<p>Widget ini digunakan untuk menampilkan daftar Pengumuman terbaru di sidebar<br/></p>
		<p><label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title :' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" /></p>
		
		<p><label for="<?php echo $this->get_field_id( 'pengumuman' ); ?>"><?php _e( 'Jumlah pos :' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'pengumuman' ); ?>" name="<?php echo $this->get_field_name( 'pengumuman' ); ?>" type="number" value="<?php echo $pengumuman; ?>" /></p>

    <?php
	}


}
