


                    <?php if (have_posts()) { ?>
					    <?php while (have_posts()): the_post(); ?>
						
						    <div class="we-3">
							    <div class="pack-img">
								    <?php if (get_post_meta($post->ID, '_pop')) { ?>
								    	<div class="pops">
									        <div class="boxpops">
										        <span>POPULER</span>
									    	</div>
								    	</div>
									<?php } ?>
								    <div class="relimg">
								        <iframe class="vidloop" src="https://www.youtube.com/embed/<?php echo get_post_meta($post->ID, '_embed', true); ?>" frameborder="0" allowfullscreen></iframe>
									</div>
									<div class="dets">
									    <div class="dets-inn">
											<i class="far fa-clock"></i> <?php printf(__('%s', 'weesata'), get_the_time('j F Y')); ?>
											</strong>
										</div>
										<h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
									</div>
								</div>
							</div>
						    
						<?php endwhile; ?>
					<?php } ?>



