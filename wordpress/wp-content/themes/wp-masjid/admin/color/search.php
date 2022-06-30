	<tr valign="top">
        <td class="tl">
		    <label for="headbg"><?php _e('Search Box', 'weesata'); ?></label>
		</td>
	    <td> 
		    <div class="ready">
			    <div class="closed <?php echo (get_option('custom')) ? get_option('custom') : 'nocustom' ?>">
			    </div>
			    <div class="clear">
				    <div class="full">
				        Bagian ini mengatur pewarnaan pencarian Paket
						<br/><br/>
					</div>
				</div>
				
				<div class="clear">
				    <div class="quarter">
				        <label for="sboxbg"><?php _e('Background', 'weesata'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="spacbg" id="spacbg" class="coloring" value="<?php echo get_option('spacbg'); ?>"/> 
					</div>
				</div>
				
				<div class="clear">
				    <div class="quarter">
				        <label for="slihco"><?php _e('Input BG', 'weesata'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="insel" id="insel" class="coloring" value="<?php echo get_option('insel'); ?>"/> 
					</div>
				    <div class="quarter">
				        <label for="simbg"><?php _e('Input Color', 'weesata'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="spincol" id="spincol" class="coloring" value="<?php echo get_option('spincol'); ?>"/> 
					</div>
				</div>
				
				<div class="clear">
				    <div class="quarter">
				        <label for="slihco"><?php _e('Right Icon BG', 'weesata'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="lefinbg" id="lefinbg" class="coloring" value="<?php echo get_option('lefinbg'); ?>"/> 
					</div>
				    <div class="quarter">
				        <label for="simbg"><?php _e('Right Icon Color', 'weesata'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="leficol" id="leficol" class="coloring" value="<?php echo get_option('leficol'); ?>"/> 
					</div>
				</div>
				
				<div class="clear">
				    <div class="quarter">
				        <label for="slihco"><?php _e('Button BG', 'weesata'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="butsebg" id="butsebg" class="coloring" value="<?php echo get_option('butsebg'); ?>"/> 
					</div>
				    <div class="quarter">
				        <label for="simbg"><?php _e('Button Color', 'weesata'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="butsecol" id="butsecol" class="coloring" value="<?php echo get_option('butsecol'); ?>"/> 
					</div>
				</div>

			</div>
		</td>
     </tr>
