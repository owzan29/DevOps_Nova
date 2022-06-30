        <script>
            jQuery(document).ready(function($) {
              var owl = $('.justslide');
              owl.on('initialize.owl.carousel initialized.owl.carousel ' +
                'initialize.owl.carousel initialize.owl.carousel ' +
                'resize.owl.carousel resized.owl.carousel ' +
                'refresh.owl.carousel refreshed.owl.carousel ' +
                'update.owl.carousel updated.owl.carousel ' +
                'drag.owl.carousel dragged.owl.carousel ' +
                'translate.owl.carousel translated.owl.carousel ' +
                'to.owl.carousel changed.owl.carousel',
                function(e) {
                  $('.' + e.type)
                    .removeClass('secondary')
                    .addClass('success');
                  window.setTimeout(function() {
                    $('.' + e.type)
                      .removeClass('success')
                      .addClass('secondary');
                  }, 500);
                });
              owl.owlCarousel({
                loop: true,
                nav: false,
				dots: false,
                lazyLoad: true,
				autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: false,
                margin: 0,
                video: true,
                items:1,
              });
            });
        </script>

        <section id="slidex" class="slide<?php echo (get_option('headerbgop')) ? get_option('headerbgop').'' : '1' ?>">	
	  
        <?php query_posts('post_type=slide&showposts=5'); ?>	
        	<?php if (have_posts()) { ?>

	     	<div class="justslide owl-carousel owl-theme">
		     		
				<?php while (have_posts()): the_post(); ?>
							
					<div class="item">
								
						<?php if (has_post_thumbnail()) { ?>
						    <?php the_post_thumbnail('slide', array(
							    'alt' => trim(strip_tags($post->post_title)),
								'title' => trim(strip_tags($post->post_title)),
							)); ?>
						<?php } ?>
						
					</div>
					    	
				<?php endwhile; ?>
		        		
		    </div>
					
			<?php } ?>
	    <?php wp_reset_query(); ?>
	
        </section>