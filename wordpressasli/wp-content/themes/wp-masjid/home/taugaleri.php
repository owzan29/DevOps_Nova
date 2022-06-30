	<div class="intau clear">
	    <div class="tau">
		    <div class="taubox">
	        	<h3><span><?php echo (get_option('tausiyah')) ? get_option('tausiyah') : 'TAUSIYAH' ?></span></h3>
            	
	     	    <div class="taulist">
				    <?php query_posts('post_type=tausiyah&showposts=3'); ?>
			        	<?php if (have_posts()) { ?>
				        	<?php while (have_posts()): the_post(); ?>
				    	        <div class="tls clear">
							    	<div class="imgtau">
										<div class="tauimg">
							            	<?php if (has_post_thumbnail()) { ?>
						            		<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('medthumb', array(
							            		'alt' => trim(strip_tags($post->post_title)),
								     	    	'title' => trim(strip_tags($post->post_title)),
								    	    	)); ?>
								        	</a>
							            	<?php } ?>
								        </div>
									</div>
					    		    <div class="taucon">
						                <?php printf(__('Oleh : %s - <i class="far fa-clock"></i> %s', 'wpmasjid'),
					                            get_the_author(),
					                         	get_the_time('l, j M Y')
				                        ); ?>
							    		<h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
										<?php if (function_exists('smart_excerpt')) smart_excerpt(get_the_excerpt(), 20); ?>
							    	</div>
						    	</div>
				        	<?php endwhile; ?>
		        		<?php } ?>
	        	    <?php wp_reset_query(); ?>
			    </div>
	    	</div>
		</div>
	
	    <div class="ggam">
		    <div class="gbox">
        		<h3><span><?php echo (get_option('galeri')) ? get_option('galeri') : 'GALERI' ?></span></h3>
	    	    <?php query_posts('post_type=galeri&showposts=9&orderby=rand'); ?>
				    <div class="clear">
				    <?php if (have_posts()) { ?>
					    <ul class="clear">
					        <?php while (have_posts()): the_post(); ?>
						    	<li>
								    <div class="glist">
						    	    <?php if (has_post_thumbnail()) { ?>
						        		<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('medthumb', array(
							        		'alt' => trim(strip_tags($post->post_title)),
									    	'title' => trim(strip_tags($post->post_title)),
									    	)); ?></a>
							            <?php } ?>
								    </div>
								</li>
					    	<?php endwhile; ?>
						</ul>
		    		<?php } ?>
				    </div>
			    <?php wp_reset_query(); ?>
			</div>
		</div>
	</div>
	