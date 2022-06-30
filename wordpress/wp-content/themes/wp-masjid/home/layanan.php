	<!-- LAYANAN MASJID -->
    <div class="servin">
						
		<div class="lay">
	    	<h3><span><?php echo (get_option('layanan')) ? get_option('layanan') : 'LAYANAN' ?></span></h3>
		    	<?php query_posts('post_type=layanan&showposts=50'); ?>
		        	<div class="clear outserv">
		        		<?php if (have_posts()) { ?>
		    	    		<?php while (have_posts()): the_post(); ?>
			             		<div class="servbox">
								    <div class="servimg">
									<?php if (has_post_thumbnail()) { ?>
						        		<a href="<?php the_permalink() ?>">
										    <?php the_post_thumbnail('medthumb', array(
							        		'alt' => trim(strip_tags($post->post_title)),
									    	'title' => trim(strip_tags($post->post_title)),
									    	)); 
											?>
								    	</a>
							    	<?php } else { ?>
							    		<a href="<?php the_permalink() ?>" class="thumb">
							    	    	<img src="<?php echo get_template_directory_uri(); ?>/images/default.png"/>
							    		</a>
									<?php } ?>
									</div>
								    <div class="sinbox">
				                		<div class="stop"><strong><?php the_title(); ?></strong></div>
					             		<div class="clear">
										    <span class="stleft"><?php echo get_post_meta($post->ID, '_hubungi', true); ?></span>
						            	    <span class="stright"><i class="fas fa-phone"></i> <?php echo get_post_meta($post->ID, '_informasi', true); ?></span>
										</div>
					            	</div>
								</div>
				         	<?php endwhile; ?>
		    	        <?php } ?>
		        	</div>
		    	<?php wp_reset_query(); ?>
		</div>
		
	</div>
	<!-- LAYANAN MASJID -->