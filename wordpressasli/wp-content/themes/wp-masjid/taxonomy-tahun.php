<?php get_header(); ?>

    <?php if (function_exists('dimox_breadcrumbs')) { ?>
        <?php dimox_breadcrumbs(); ?>
    <?php } ?>

    	<section class="weefirst">
     	    <div class="container clear">
     	     	<div class="pack-one clear">
		            <?php get_template_part('loop/tahun'); ?>
		        </div>
		        <div class="inipage clear">
		            <?php get_template_part('pagination'); ?>
		     	</div>
	    	</div>
        </section>
	
<?php get_footer(); ?>
