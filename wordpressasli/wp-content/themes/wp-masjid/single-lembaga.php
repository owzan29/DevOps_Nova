<?php get_header(); ?>

	<?php if (function_exists('dimox_breadcrumbs')) { ?>
        <?php dimox_breadcrumbs(); ?>
    <?php } ?>

<section class="wecontent clear">
	
    <div class="mas-nav clear">
	
    	<div class="weleft">
        	<?php if (have_posts()): ?>
	        	<?php while (have_posts()): the_post(); ?>
				<?php 
			        global $post;
        	    	$pengurus_fields = get_post_meta($post->ID, 'pengurus_fields', true);
		        ?>

				<!-- left side -->

				<div class="blog-content clear">
				    <h2><?php the_title(); ?></h2>
					<div class="">
						<div class="lap-infaq">
						        <table class="infaq">
						    	    <tr>
							    	    <td class="tops" width="40">NO</td>
								    	<td class="tops jleft">NAMA</td>
									    <td class="tops">TUGAS/JABATAN</td>
		    						</tr>
			    				<?php if (is_array($pengurus_fields)) { ?>
			                 	    <?php 
								    $count = 0;
					    		    foreach ( $pengurus_fields as $field ) {
								    $count++; 
							    	?>
							    	<tr>
						    	    	<td><?php echo $count; ?></td>
					    				<td class="jleft"><?php echo esc_attr( $field['namape'] ); ?></td>
						    			<td><strong><?php echo esc_attr( $field['tugas'] ); ?></strong></td>
							    	</tr>
						        	<?php } ?>
						    	<?php } ?>
					        	</table>
						</div>
					</div>
					<?php if (has_post_thumbnail()) echo '<div class="sthumb">'.get_the_post_thumbnail($post->ID, 'full',
    				    	array(
				    		'alt' => trim(strip_tags($post->post_title)),
				    		'title' => trim(strip_tags($post->post_title)),
			    		)).'</div>'; ?>
						
				    <?php the_content(); ?>
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
	  	
    	</div>
	
		<!-- right content -->
    	<div class="weright">
    		
			<?php get_sidebar(); ?>
		
		</div>
	    <!-- right content -->


	</div>
</section>
	
<?php get_footer(); ?>
