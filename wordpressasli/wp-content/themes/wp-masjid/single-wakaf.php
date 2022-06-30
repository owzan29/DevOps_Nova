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
				    $tangwakaf = get_post_meta($post->ID, '_tangwakaf', true);
	                $jumwakaf = get_post_meta($post->ID, '_jumwakaf', true);
	        	    $asalwakaf = get_post_meta($post->ID, '_asalwakaf', true);
		        ?>

				<!-- left side -->

				<div class="blog-content clear">
				    <h2><?php the_title(); ?></h2>
					<div class="">
						<div class="lap-infaq">
						        <table class="infaq">
							    	<tr>
						    	    	<td>TANGGAL</td>
										<td>:</td>
					    				<td><?php echo $tangwakaf; ?></td>
							    	</tr>
									<tr>
						    	    	<td>NAMA</td>
										<td>:</td>
					    				<td><?php the_title(); ?></td>
							    	</tr>
									<tr>
						    	    	<td>ASAL</td>
										<td>:</td>
					    				<td><?php echo $asalwakaf; ?></td>
							    	</tr>
									<tr>
						    	    	<td>JUMLAH</td>
										<td>:</td>
					    				<td><?php echo $jumwakaf; ?></td>
							    	</tr>
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
