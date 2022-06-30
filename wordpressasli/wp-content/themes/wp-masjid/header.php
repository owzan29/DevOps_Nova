<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<meta http-equiv="Content-language" content="<?php bloginfo('language'); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="revisit-after" content="7 days" />
		<meta http-equiv="Expires" content="0" />
		<meta http-equiv="Pragma" content="no-cache" />
		<meta http-equiv="Cache-Control" content="no-cache" />
		<meta http-equiv="Copyright" content="<?php bloginfo('name'); ?>" />
		<?php 
	    	if (is_single()) {
				if (have_posts()): 
			    	while (have_posts()): the_post();
					$thumb_id = get_post_thumbnail_id();
					$thumb_url = wp_get_attachment_image_src($thumb_id,'landscape', true);
					if (has_post_thumbnail()) {
				    	?>
				    	<meta property="og:image" content="<?php echo $thumb_url[0]; ?>" />
						<?php
					} else {
						?>
						<meta property="og:image" content="<?php echo (get_option('share')) ? get_option('share') : get_template_directory_uri().'/images/masjid.jpg' ?>" />
						<?php
					}
					endwhile;
				endif;
			} else if (is_page()) {
				if (have_posts()):
			    	while (have_posts()): the_post();
					$thumb_id = get_post_thumbnail_id();
					$thumb_url = wp_get_attachment_image_src($thumb_id,'landscape', true);
					if (has_post_thumbnail()) {
				    	?>
				    	<meta property="og:image" content="<?php echo $thumb_url[0]; ?>" />
						<?php
					} else {
						?>
						<meta property="og:image" content="<?php echo (get_option('share')) ? get_option('share') : get_template_directory_uri().'/images/masjid.jpg' ?>" />
						<?php
					} 
					endwhile;
				endif;
			} else { 
			    ?>
			    <meta property="og:image" content="<?php echo (get_option('share')) ? get_option('share') : get_template_directory_uri().'/images/masjid.jpg' ?>" />
				<?php
		     } 
		?>
		<link rel="profile" href="https://gmpg.org/xfn/11" />
		<?php if (get_option('favicon')) { ?>
	    <link rel="shortcut icon" href="<?php echo get_option('favicon'); ?>" type="image/x-icon" />
		<?php } else { ?>
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/icon.png" type="image/x-icon" />
		<?php } ?>
		<link id="style" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" rel="stylesheet" />
		<link id="awesome" href="<?php echo get_template_directory_uri(); ?>/font-awesome/css/fontawesome-all.css" type="text/css" rel="stylesheet" />
		<link id="owlcarousel" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.min.css" type="text/css" rel="stylesheet" />
		<link id="owlanimate" href="<?php echo get_template_directory_uri(); ?>/css/owl.animate.css" type="text/css" rel="stylesheet" />
		<link id="owltheme" href="<?php echo get_template_directory_uri(); ?>/css/owl.theme.default.min.css" type="text/css" rel="stylesheet" />
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/newstickers.js"></script>
		
		<?php wp_head(); ?>
		
		<?php get_template_part('header/javascript'); ?>
		<?php get_template_part('header/custom'); ?>
	
	</head>
	
	<!-- Tema Weesata 2 oleh Ciuss Creative , rilis Agustus 2018 -->
	
	<body <?php body_class(); ?>>		

<div class="spinner-wrapper">
<div class="spinner">
  <div class="bounce1"></div>
  <div class="bounce2"></div>
  <div class="bounce3"></div>
</div>
</div>	
    	
		<div class="wrapper hiden">
				
				<?php get_template_part('header/runtext'); ?>
				<?php get_template_part('header/mobile'); ?>
			    <?php get_template_part('header/header'); ?>
				<?php get_template_part('header/menus'); ?>
			
		
			<?php if (is_front_page()) { ?>
		    	<div class="wee-slider clear">
    	            <?php get_template_part('slider'); ?>
		    	</div>
			<?php } ?>
				
		
			
			<!-- Container -->
			<div class="clear">
