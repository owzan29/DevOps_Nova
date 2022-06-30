	<tr valign="top">
        <td class="tl">
		    <label for="headbg"><?php _e('Slideshow', 'weesata'); ?></label>
		</td>
	    <td> 
		    <div class="ready">
			    <div class="closed <?php echo (get_option('custom')) ? get_option('custom') : 'nocustom' ?>">
			    </div>
			    <div class="clear">
				    <div class="full">
				        Bagian ini mengatur pewarnaan pada Slider besar di Homepage / Beranda
						<br/><br/>
					</div>
				</div>
				
				<div class="clear">
				    <div class="quarter">
				        <label for="sboxbg"><?php _e('Background', 'weesata'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="sboxbg" id="sboxbg" class="coloring" value="<?php echo get_option('sboxbg'); ?>"/> 
					</div>
				</div>
				
				<div class="clear">
				    <div class="quarter">
				        <label for="slihco"><?php _e('Text Color', 'weesata'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="slidecol" id="slidecol" class="coloring" value="<?php echo get_option('slidecol'); ?>"/> 
					</div>
				    <div class="quarter">
				        <label for="simbg"><?php _e('Border Color', 'weesata'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="slidebdr" id="slidebdr" class="coloring" value="<?php echo get_option('slidebdr'); ?>"/> 
					</div>
				</div>

			</div>
		</td>
     </tr>
	<!-- HEADER 1 -->
