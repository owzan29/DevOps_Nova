<?php
class Tausiyah extends WP_Widget {
	function __construct() {
		parent::__construct(
			'tausiyah',
			esc_html__( 'WPM : Tausiyah Terbaru', 'wpmasjid' ),
			array( 'description' => esc_html__( 'Widget ini digunakan untuk menampilkan Tausiyah terbaru', 'wpmasjid' ), 'customize_selective_refresh' => true, )
		);
	}

	public function widget( $args, $instance ) {
		if ( ! isset( $args['widget_id'] ) ) {
			$args['widget_id'] = $this->id;
		}
		
		$title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : __( 'Tausiyah Terbaru' );
		
		/** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
		$title = apply_filters( 'widget_title', $title, $instance, $this->id_base );
		
		$tausiyah_qty = ( ! empty( $instance['tausiyah_qty'] ) ) ? absint( $instance['tausiyah_qty'] ) : 5;
		if ( ! $tausiyah_qty ) {
			$tausiyah_qty = 5;
		}
		
		global $post;
		
		$q_args = array( 
			'post_type' => 'tausiyah', 
			'numberposts' => $tausiyah_qty,
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
			<span class="rpthumb-date"><?php printf(__('<i class="far fa-clock"></i> <em>%s</em>', 'wpmasjid'),
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
		$instance['tausiyah_qty'] = sanitize_text_field( $new_instance['tausiyah_qty'] );
		return $instance;
	}
	
	public function form( $instance ) {
		$title     = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : 'Tausiyah Terbaru';
		$tausiyah_qty     = isset( $instance['tausiyah_qty'] ) ? esc_attr( $instance['tausiyah_qty'] ) : 5; ?>
		<p>Widget ini digunakan untuk menampilkan daftar Tausiyah terbaru di sidebar<br/></p>
		<p><label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title :' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" /></p>
		
		<p><label for="<?php echo $this->get_field_id( 'tausiyah_qty' ); ?>"><?php _e( 'Jumlah pos :' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'tausiyah_qty' ); ?>" name="<?php echo $this->get_field_name( 'tausiyah_qty' ); ?>" type="number" value="<?php echo $tausiyah_qty; ?>" /></p>

    <?php
	}


}

