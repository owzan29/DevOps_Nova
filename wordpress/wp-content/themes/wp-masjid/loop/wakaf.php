
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
										<h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
										<div class="dets-inn">
											<?php if (function_exists('smart_excerpt')) smart_excerpt(get_the_excerpt(), 10); ?>
										</div>
									</div>
								</div>
							</div>
						    
						<?php endwhile; ?>
					<?php } ?>



