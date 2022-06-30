<?php get_header(); ?>

	<?php if (function_exists('dimox_breadcrumbs')) { ?>
        <?php dimox_breadcrumbs(); ?>
    <?php } ?>

<section class="wecontent clear">
    <div class="mas-nav clear">
	
    	<div class="weleft">
        	<?php if (have_posts()): ?>
	        	<?php while (have_posts()): the_post(); ?>

				<div class="gal-content blog-content clear">
				    <h2><?php the_title(); ?></h2>
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
