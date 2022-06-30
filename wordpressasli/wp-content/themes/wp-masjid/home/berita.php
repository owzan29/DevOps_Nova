	    <!-- Block Berita -->
		<div class="ll clear">
	    	<h3><span><?php echo (get_option('berita')) ? get_option('berita') : 'BERITA TERBARU' ?></span></h3>
	    	<?php query_posts('post_type=post&showposts=4'); ?>
				
				<?php if (have_posts()) { ?>
					<?php while (have_posts()): the_post(); ?>
			    		<div class="berr">
						    <div class="berrin">
						        <?php if (has_post_thumbnail()) { ?>
						            <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('thumb', array(
							            'alt' => trim(strip_tags($post->post_title)),
							    		'title' => trim(strip_tags($post->post_title)),
							    		)); ?>
							    	</a>
							    <?php } else { ?>
							    	<a href="#">
			    	    	    	    <img src="<?php echo get_template_directory_uri(); ?>/images/default.png"/>
			        		    	</a>
						     	<?php } ?>
							    <div class="coberr">
						        	<?php printf(__('<i class="far fa-clock"></i> %s', 'wpmasjid'),get_the_time('l, j M Y')); ?>
							        <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
							    	<?php printf(__('Oleh : <em>%s</em>', 'wpmasjid'), get_the_author()); ?>
						    	</div>
							</div>
						</div>
					<?php endwhile; ?>
				<?php } ?>
				
			<?php wp_reset_query(); ?>
		</div>