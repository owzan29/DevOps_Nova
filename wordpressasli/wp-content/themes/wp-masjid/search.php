<?php get_header(); ?>

	<?php if (function_exists('dimox_breadcrumbs')) { ?>
        <?php dimox_breadcrumbs(); ?>
    <?php } ?>
		
    <?php if (have_posts()): ?>
	    <?php if (get_post_type(get_the_ID()) == 'post') { ?>
		
		    <section class="weefirst">
     	        <div class="mas-nav clear">
     	     	    <div class="pack-one clear">
	                	<?php get_template_part('loop/loop'); ?>
	                </div>
	                <div class="inipage clear">
	                	<?php get_template_part('pagination'); ?>
	                </div>
	            </div>
	        </section>
				
		<?php } else { ?>
				
			<?php get_template_part('loop/404'); ?>
				
		<?php } ?>
				
	<?php else: ?>
				
	    <?php get_template_part('loop/404'); ?>
					
    <?php endif; ?>
	
<?php get_footer(); ?>
