    	<!-- GALERI VIDEO -->
		<div class="vbox">
    		<h3><span><?php echo (get_option('video')) ? get_option('video') : 'VIDEO' ?></span></h3>
	    	<?php query_posts('post_type=video&showposts=3'); ?>
				<div class="masvid clear">
				    <?php if (have_posts()) { ?>
					    <?php while (have_posts()): the_post(); ?>
						<div class="vlist">
				    		<div class="vfull">
						    	<iframe src="https://www.youtube.com/embed/<?php echo get_post_meta($post->ID, '_embed', true); ?>" frameborder="0" allowfullscreen></iframe>
							</div>
						</div>
						<?php endwhile; ?>
		    		<?php } ?>
				</div>
			<?php wp_reset_query(); ?>
		</div>
		<!-- GALERI VIDEO -->
		