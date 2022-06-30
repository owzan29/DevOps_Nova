<?php
/**
 * Template Name: Tema Homepage
 */
?>

    <?php get_header(); ?>
	
	<div id="topcontainer" class="clear">
	    <div class="mas-nav">
		    <div id="after">
		        <?php get_template_part('home/after'); ?>
		    </div>
	    </div>
    </div>
	
	<div id="faqcontainer" class="clear">
	    <div class="mas-nav">
		    <div id="infaq">
		        <?php get_template_part('home/infaq'); ?>
		    </div>
	    </div>
    </div>
	
	<div id="bercontainer" class="clear">
	    <div class="mas-nav">
		    <div id="berita">
		        <?php get_template_part('home/berita'); ?>
		    </div>
	    </div>
    </div>
	
	<div id="agcontainer" class="clear">
	    <div class="mas-nav">
		    <div id="agenda">
		        <?php get_template_part('home/agenda'); ?>
		    </div>
	    </div>
    </div>
	
	<div id="sercontainer" class="clear">
	    <div class="mas-nav serv">
		    <div id="layanan">
		        <?php get_template_part('home/layanan'); ?>
		    </div>
	    </div>
		<div class="laylai">
		</div>
    </div>
	
	<div id="taucontainer" class="clear">
	    <div class="mas-nav">
		    <div id="tausiyah">
		        <?php get_template_part('home/taugaleri'); ?>
		    </div>
	    </div>
    </div>
	
    <div id="vidcontainer" class="clear">
	    <div class="mas-nav">
		    <div id="video">
		        <?php get_template_part('home/videogal'); ?>
		    </div>
	    </div>
    </div>
	
<?php get_footer(); ?>
