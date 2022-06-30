		
	<tr valign="top">
        <td class="tl">
		    <label for="headbg"><?php _e('After Package', 'weesata'); ?></label>
		</td>
	    <td> 
		    <div class="ready">
			    <div class="closed <?php echo (get_option('custom')) ? get_option('custom') : 'nocustom' ?>">
			    </div>
				
				<div class="clear">
				    <div class="quarter">
				        <label for="dealay"><?php _e('Background', 'weesata'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="ovback" id="ovback" class="coloring" value="<?php echo get_option('ovback'); ?>"/> 
					</div>
					<div class="quarter">
					    <label><?php _e('Opacity', 'weesata'); ?></label>
					</div>
					<div class="quarter">
			        	<input name="ovbackop" id="ovbackop" style="width: 100%;" type="range" min="0.001" max="1" step="0.001" value="<?php echo get_option('ovbackop'); ?>" data-orientation="vertical" />
                    </div>
				</div>
				
				<div class="clear">
				    <div class="quarter">
				        <label for="dealay"><?php _e('Heading Color', 'weesata'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="ovhecol" id="ovhecol" class="coloring" value="<?php echo get_option('ovhecol'); ?>"/> 
					</div>
					<div class="quarter">
				        <label for="dealay"><?php _e('Heading Span', 'weesata'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="ovhespan" id="ovhespan" class="coloring" value="<?php echo get_option('ovhespan'); ?>"/> 
					</div>
				</div>
				<div class="clear">
				    <div class="quarter">
				        <label for="proheco"><?php _e('Deskripsi Color', 'weesata'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="descol" id="descol" class="coloring" value="<?php echo get_option('descol'); ?>"/> 
					</div>
				</div>
				
				<div class="clear">
				    <div class="quarter">
				        <label for="probutt"><?php _e('Button BG', 'weesata'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="ovbutbg" id="ovbutbg" class="coloring" value="<?php echo get_option('ovbutbg'); ?>"/> 
					</div>
				    <div class="quarter">
				        <label for="proltext"><?php _e('Button Color', 'weesata'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="ovbutcol" id="ovbutcol" class="coloring" value="<?php echo get_option('ovbutcol'); ?>"/> 
					</div>
				</div>
				
			</div>
		</td>
     </tr>
	 