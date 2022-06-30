    <tr valign="top">
        <td class="tl">
		    <label for="headbg"><?php _e('Agenda + Galeri Home', 'weesata'); ?></label>
		</td>
	    <td> 
		    <div class="ready">
			    <div class="closed <?php echo (get_option('custom')) ? get_option('custom') : 'nocustom' ?>">
			    </div>
				
				<div class="clear">
				    <div class="quarter">
				        <label for="serlbg"><?php _e('Background', 'weesata'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="agalbg" id="agalbg" class="coloring" value="<?php echo get_option('agalbg'); ?>"/> 
					</div>
					<div class="quarter">
				        <label for="serrbg"><?php _e('Text Color', 'weesata'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="agalcol" id="agalcol" class="coloring" value="<?php echo get_option('agalcol'); ?>"/> 
					</div>
				</div>
				
				<div class="clear">
				    <div class="quarter">
				        <label for="serhe"><?php _e('Rute Background', 'weesata'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="rutebg" id="rutebg" class="coloring" value="<?php echo get_option('rutebg'); ?>"/> 
					</div>
				    <div class="quarter">
				        <label for="sercol"><?php _e('Rute Text Color', 'weesata'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="rutecol" id="rutecol" class="coloring" value="<?php echo get_option('rutecol'); ?>"/> 
					</div>
				</div>
				
				<div class="clear">
				    <div class="quarter">
				        <label for="seribg"><?php _e('Button BG', 'weesata'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="agbutbg" id="agbutbg" class="coloring" value="<?php echo get_option('agbutbg'); ?>"/> 
					</div>
				    <div class="quarter">
				        <label for="serico"><?php _e('Button Color', 'weesata'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="agbutcol" id="agbutcol" class="coloring" value="<?php echo get_option('agbutcol'); ?>"/> 
					</div>
				</div>
				
			</div>
		</td>
     </tr>