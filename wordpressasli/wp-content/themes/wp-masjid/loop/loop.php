
                    <?php if (have_posts()) { ?>
					    <?php while (have_posts()): the_post(); ?>
						
						    <div class="we-3">
							    <div class="pack-img">
								    <div class="relimg">
								        <?php if (has_post_thumbnail()) { ?>
										<a href="<?php the_permalink() ?>">
						        			<?php the_post_thumbnail('thumb', array(
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
									    <div class="dets-inn">
											<i class="far fa-clock"></i> <?php printf(__('%s', 'weesata'), get_the_time('j F Y')); ?> 
										</div>
										<h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
									</div>
								</div>
							</div>
						    
						<?php endwhile; ?>
					<?php } ?>



