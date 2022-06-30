		</div>
		<!-- Container -->
		
		<?php get_template_part('footer/copyright'); ?>
	
	    <?php wp_footer(); ?>
        
		<!-- Back to Top -->
		<a href="javascript:" id="return-to-top"><i class="fas fa-arrow-up"></i></a>
	 	<script>
			$('#return-to-top').click(function() {
				$('body,html').animate({
					scrollTop : 0
			 	}, 500);
			});
		</script>
		
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/accordion.js"></script>
		
	</body>
</html>
