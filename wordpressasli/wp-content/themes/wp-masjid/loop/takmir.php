<?php query_posts('post_type=takmir&showposts=200'); ?>

                    <?php if (have_posts()) { ?>
					    <?php while (have_posts()): the_post(); ?>
						    <?php global $post;
        		  		    	$jabat = get_post_meta($post->ID, '_jabat', true);
		     			    ?>
						
						    <div class="we-3">
							    <div class="pack-img">
								    <div class="relimg">
								        <?php if (has_post_thumbnail()) { ?>
										<a href="<?php the_permalink() ?>">
						        			<?php the_post_thumbnail('fopengurus', array(
							    	    		'alt' => trim(strip_tags($post->post_title)),
										    	'title' => trim(strip_tags($post->post_title)),
										    	)); ?>
										</a>
						    		    <?php } else { ?>
										<a href="<?php the_permalink() ?>">
			    	    			        <img src="<?php echo get_template_directory_uri(); ?>/images/default.jpg"/>
										</a>
						     			<?php } ?>
									</div>
									<div class="dets">
										<h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
										<div class="dets-inn">
											<?php echo $jabat; ?>
										</div>
									</div>
								</div>
							</div>
						    
						<?php endwhile; ?>
					<?php } ?>

<?php wp_reset_query(); ?>