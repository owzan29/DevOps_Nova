	<tr valign="top">
        <td class="tl">
		    <label><?php _e('Footer', 'idealer'); ?></label>
		</td>
	    <td>
		    <div class="ready">
			    <div class="closed <?php echo (get_option('custom')) ? get_option('custom') : 'nocustom' ?>">
			    </div>				
				<div class="clear">
				    <div class="quarter">
				        <label><?php _e('Background', 'idealer'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="footbg" id="footbg" class="coloring" value="<?php echo get_option('footbg'); ?>"/> 
					</div>
				</div>
				
				<div class="clear">
				    <div class="quarter">
				        <label><?php _e('Footer Color', 'idealer'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="footco" id="footco" class="coloring" value="<?php echo get_option('footco'); ?>"/> 
					</div>
				</div>
				
				<div class="clear">
				    <div class="quarter">
				        <label><?php _e('Footer Link', 'idealer'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="footlk" id="footlk" class="coloring" value="<?php echo get_option('footlk'); ?>"/> 
					</div>
				</div>
			</div>
		</td>
     </tr>


	<tr valign="top">
        <td class="tl">
		    <label><?php _e('Back To Top', 'idealer'); ?></label>
		</td>
	    <td>
		    <div class="ready">
				
				<div class="clear">
				    <div class="quarter">
				        <label><?php _e('Icon Background', 'idealer'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="bttbg" id="bttbg" class="coloring" value="<?php echo get_option('bttbg'); ?>"/> 
					</div>
					<div class="quarter">
				        <label><?php _e('Icon Color', 'idealer'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="btt" id="btt" class="coloring" value="<?php echo get_option('btt'); ?>"/> 
					</div>
				</div>
			</div>
		</td>
     </tr>