<?php get_header(); ?>

	<?php if (function_exists('dimox_breadcrumbs')) { ?>
        <?php dimox_breadcrumbs(); ?>
    <?php } ?>

<section class="wecontent clear">
	
    <div class="mas-nav clear">
	
    	<div class="weleft">
        	<?php if (have_posts()): ?>
	        	<?php while (have_posts()): the_post(); ?>

				<!-- left side -->

				<div class="blog-content clear">
				    <h2><?php the_title(); ?></h2>
					<div class="met">
						<strong>Terbit</strong> <i class="far fa-clock"></i> <?php printf(__('%s', 'weesata'), get_the_time('j F Y')); ?> | <strong>Oleh</strong> : <?php the_author(); ?> | <strong>Kategori</strong> : </span><?php the_category(' / '); ?>
				    </div>
					<?php if (has_post_thumbnail()) echo '<div class="sthumb">'.get_the_post_thumbnail($post->ID, 'thumb',
    				    	array(
				    		'alt' => trim(strip_tags($post->post_title)),
				    		'title' => trim(strip_tags($post->post_title)),
			    		)).'</div>'; ?>
				    <?php the_content(); ?>
					<div class="post-tags"><?php the_tags(''.__('', 'weesata').'', ' '); ?></div>
				</div>
				
				<div class="post-navigation clear">
				    <?php
					$prev_post = get_adjacent_post(false, '', true);
					$next_post = get_adjacent_post(false, '', false); ?>
					<?php if ($prev_post): $prev_post_url = get_permalink($prev_post->ID); $prev_post_title = $prev_post->post_title; ?>
						<a class="post-prev" href="<?php echo $prev_post_url; ?>"><em><?php _e('Sebelumnya', 'wpmasjid'); ?></em><span><?php echo $prev_post_title; ?></span></a>
					<?php endif; ?>
					<?php if ($next_post): $next_post_url = get_permalink($next_post->ID); $next_post_title = $next_post->post_title; ?>
						<a class="post-next" href="<?php echo $next_post_url; ?>"><em><?php _e('Sesudahnya', 'wpmasjid'); ?></em><span><?php echo $next_post_title; ?></span></a>
					<?php endif; ?>
			    </div>
			
			    <?php endwhile; ?>
        	<?php endif; ?>
				
			
			    <?php query_posts('post_type=post&showposts=3'); ?>
	                <div class="blog-content">
		            	<div class="clear">
		        	 		<h3><span>Berita Lainnya</span></h3>
		            	</div>
		        	</div>
	                
                    <?php if (have_posts()) { ?>
					    <div class="rr clear">
					    <?php while (have_posts()): the_post(); ?>
						
						    <div class="we-3">
							    <div class="pack-img">
								    <div class="relimg">
								        <?php if (has_post_thumbnail()) { ?>
										<a href="<?php the_permalink() ?>#order">
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
						</div>
					<?php } ?>

	            <?php wp_reset_query(); ?>
			
					<div class="com-content clear">
		        		<div class="commlist clear">
			   		    	<div class="comms">
		        				<?php if (comments_open()): ?>
								<div>
			    			    	<div  class="countcoms">
							    	    <?php comments_number(__('0 Komentar', 'weesata'), __('1 Komentar', 'weesata'), __('% Komentar', 'weesata'), '', __('x', 'weesata') ); ?>
									</div>
									<?php comments_template(); ?>
								</div>
				   		     	<?php endif; ?>
			   		    	</div>		
						</div>
					
		    	 </div>
				 
	        	
    	</div>
	
		<!-- right content -->
    	<div class="weright">
    		
			<?php get_sidebar(); ?>
		
		</div>
	    <!-- right content -->


	</div>
</section>
	
<?php get_footer(); ?>
