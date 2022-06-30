<script>
            jQuery(document).ready(function($) {
              var owl = $('.latest');
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
                  }, 7000);
                });
              owl.owlCarousel({
                loop: true,
                nav: false,
				dots: false,
                lazyLoad: true,
				autoplay: true,
                autoplayTimeout: 6000,
                autoplayHoverPause: true,
                margin: 0,
                video: true,
                responsive:{
                0:{
                    items:1
                },
                480:{
                    items:1
                },
	        	800:{
                    items:2
                },
                980:{
                    items:3
                },
                1170:{
                    items:1
                }
                }
              });
            });
          </script>
		  
		<div class="mas-nav">
		<div class="address clear">
		    <div class="colover clear">
	    	<div class="colslide">
		    	<div class="cols-1">
	         	    <div class="indiv">
					    <i class="fas fa-map-marker-alt"></i> <div class="masname"><?php echo (get_option('nama')) ? get_option('nama') : 'MASJID AT-TAQWA' ?></div>
		                <div class="em">
						    <?php echo (get_option('alamat')) ? get_option('alamat') : 'Jalan Kerikil Tajam No. 39' ?>, <?php echo (get_option('kelurahan')) ? get_option('kelurahan') : 'Gunung Agung' ?>, <?php echo (get_option('kecamatan')) ? get_option('kecamatan') : 'Sawahan' ?>, <?php echo (get_option('kabupaten')) ? get_option('kabupaten') : 'Surabaya' ?>, <?php echo (get_option('provinsi')) ? get_option('provinsi') : 'Jawa Timur' ?> , <?php echo (get_option('kodepos')) ? get_option('kodepos') : '' ?>
						</div>
					</div>
	        	</div>
         	</div>
			
			<div class="callslide">
             	<div class="cols-3">
				    <div class="indiv">
					    <i class="fas fa-phone-volume"></i> <div class="tops"><?php echo (get_option('pusat')) ? get_option('pusat') : 'PUSAT INFORMASI' ?></div>
		                <div class="numphone"><?php echo (get_option('telepon')) ? get_option('telepon') : '0812 3564 0609' ?></div>
						<div class="em">
						    <div class="infa">
						        <?php if (get_option('facebook')) { echo '<a href="'.get_option('facebook').'"><i class="fab fa-facebook"></i></a>'; } ?>
					    	    <?php if (get_option('twitter')) { echo '<a href="'.get_option('twitter').'"><i class="fab fa-twitter"></i></a>'; } ?>
					        	<?php if (get_option('instagram')) { echo '<a href="'.get_option('instagram').'"><i class="fab fa-instagram"></i></a>'; } ?>
						        <?php if (get_option('youtube')) { echo '<a href="'.get_option('youtube').'"><i class="fab fa-youtube"></i></a>'; } ?>
						    </div>
						</div>
					</div>
				</div>
			</div>
			
        	<div class="colspeop">
        	    <div class="cols-2">		
		
            	<!-- SLIDE RANDOM -->	  
                    <section id="agendamasjid">
                    	<div class="row">
                    		<div class="large-12 columns">
                	     		<div class="latest owl-carousel owl-theme">
								    <?php query_posts('post_type=takmir&showposts=10'); ?>
									    <?php if (have_posts()) { ?>
										    <?php while (have_posts()): the_post(); ?>
											    <div class="item">
												    <div class="itover">
													    <div class="label">
														    <?php if (has_post_thumbnail()) { ?>
															    <?php the_post_thumbnail('fopengurus', array(
																    'alt' => trim(strip_tags($post->post_title)),
																	'title' => trim(strip_tags($post->post_title)),
																)); ?>
															<?php } else { ?>
															    <img src="<?php echo get_template_directory_uri(); ?>/images/photos.png"/>
															<?php } ?>
														</div>
														<div class="pp">
														    <div class="takname"><?php the_title(); ?></div>
							        	    	            <div class="jab"><?php echo get_post_meta($post->ID, '_jabat', true); ?></div>
															<a href="<?php the_permalink() ?>"><div class="takpro">PROFILE</div></a>
							        		            </div>
													</div>
												</div>
											<?php endwhile; ?>
										<?php } ?>
									<?php wp_reset_query(); ?>
			                	</div>
		                 	</div>
	                 	</div>
                	</section>
             	<!-- SLIDE -->

	        	</div>
        	</div>
			</div>
		</div>
		</div>
