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
					<?php if (has_post_thumbnail()) echo '<div class="sthumb">'.get_the_post_thumbnail($post->ID, 'thumb',
    				    	array(
				    		'alt' => trim(strip_tags($post->post_title)),
				    		'title' => trim(strip_tags($post->post_title)),
			    		)).'</div>'; ?>
				    <?php the_content(); ?>
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
