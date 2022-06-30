			<div class="nav-masjid">
			    <div class="mas-nav clear">			    	
					
					<div class="inn">
					    <div class="logos">
						    <div class="logo-img">
				            	<a href="<?php echo home_url(); ?>">
							    	<img id="logo" src="<?php echo (get_option('logos')) ? get_option('logos') : get_template_directory_uri().'/images/logo.png' ?>" alt="<?php bloginfo('name'); ?>"/>
								</a>
							</div> 
							<i class="fas fa-bars"></i>
		     	        </div>
						<div class="ws clear">
						        <h3><span><?php echo date_i18n('l, j m Y'); ?></span></h3>
							    <script type="text/javascript" src="https://www.muslimpro.com/muslimprowidget.js?cityid=<?php echo (get_option('IDkota')) ? get_option('IDkota') : '1637532' ?>&language=id&timeformat=24" async></script>
						</div>
					</div>
				</div>
			</div>
			
			