<?php
/**
 * Post tema Akademi
 * Author : yayun
 * Facebook : http://facebook.com/ciussgw
 * Whatsapp : 0838-1525-1385
 */
?>

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
				    <iframe class="vidsing" src="https://www.youtube.com/embed/<?php echo get_post_meta($post->ID, '_embed', true); ?>" frameborder="0" allowfullscreen></iframe>
				    <h1 class="vidtitle"><?php the_title(); ?></h1>
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
