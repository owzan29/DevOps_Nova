<?php $paged = ( get_query_var('page') ) ? get_query_var('page') : 1; ?>
<?php query_posts('post_type=event&paged='.$paged.'&meta_key=_tevent&orderby=meta_value_num&order=ASC'); ?>


                    <?php if (have_posts()) { ?>
					    <?php while (have_posts()): the_post(); ?>
						    <?php
							global $post;
							$tevent = get_post_meta($post->ID, '_tevent', true);
							$jam = get_post_meta($post->ID, '_jam', true);
							$lokasi = get_post_meta($post->ID, '_lokasi', true);
							$koordinator = get_post_meta($post->ID, '_koordinator', true);
							$telepon = get_post_meta($post->ID, '_telepon', true);
						?>             
						
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
											<i class="far fa-clock"></i> <?php echo date_i18n("H:i", strtotime($jam)); ?> - <?php echo date_i18n("j F Y", strtotime($tevent)); ?> 
										</div>
										<h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
										<div class="dets-inn">
											<?php echo 'Info : '.$koordinator.' / '.$telepon; ?> 
										</div>
									</div>
								</div>
							</div>
						    
						<?php endwhile; ?>
					<?php } ?>

<?php wp_reset_query(); ?>
