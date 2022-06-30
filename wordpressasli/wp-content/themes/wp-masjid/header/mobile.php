            <div class="mob">
			    <div class="smob">
				    <?php get_search_form(); ?>
				</div>
    	        <?php 
			    	wp_nav_menu(array(
					    'theme_location' => 'navigation', 
						'container' => 'div', 
						'container_class' => 'mobi', 
						'menu_class' => 'accordion', 
						'menu_id' => 'acc', 
						'fallback_cb' => false
					)); 
				?>
				<i class="fas fa-times xclose"></i>
	        </div>