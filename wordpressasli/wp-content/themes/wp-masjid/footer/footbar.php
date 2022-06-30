	<div id="footbar" class="clear">
	    <div class="mas-nav clear">
		    <div class="pack-one relat">
			    <div class="footcon">
			
			    	<div class="foot-bar fleft">
		    			<div class="foot-inn">
			    			<?php if (dynamic_sidebar('Footbar Kiri')) {
							$widget_args = array(
					    		'before_widget' => '<div id="%1$s" class="%2$s widget">',
								'after_widget' => '</div>',
								'before_title' => '<h3>',
								'after_title' => '</h3>'
							); ?>	
							<?php } else { ?>
							Belum ada Widget ditambahkan, silahkan tambah melalui menu berikut :<br/>
							Dasbor > Widget > Footbar Kiri
							<?php } ?>
						</div>
					</div>
				
					<div class="foot-bar fcenter">
		    			<div class="foot-inn">
			    			<?php if (dynamic_sidebar('Footbar Tengah')) {
							$widget_args = array(
				    			'before_widget' => '<div id="%1$s" class="%2$s widget">',
								'after_widget' => '</div>',
								'before_title' => '<h3>',
								'after_title' => '</h3>'
							); ?>	
							<?php } else { ?>
							Belum ada Widget ditambahkan, silahkan tambah melalui menu berikut :<br/>
							Dasbor > Widget > Footbar Tengah
							<?php } ?>
						</div>
					</div>
				
					<div class="foot-bar fright">
					    <div class="foot-inn">
			    			<?php if (dynamic_sidebar('Footbar Kanan')) {
							$widget_args = array(
					    		'before_widget' => '<div id="%1$s" class="%2$s widget">',
								'after_widget' => '</div>',
								'before_title' => '<h3>',
								'after_title' => '</h3>'
							); ?>	
							<?php } else { ?>
							Belum ada Widget ditambahkan, silahkan tambah melalui menu berikut :<br/>
							Dasbor > Widget > Footbar Kanan
							<?php } ?>
						</div>
					</div>
				
				</div>
			</div>
		</div>
	</div>