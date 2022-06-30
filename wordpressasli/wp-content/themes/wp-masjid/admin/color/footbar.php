
	<tr valign="top">
        <td class="tl">
		    <label><?php _e('Widget Footer', 'footbar'); ?></label>
		</td>
	    <td>
		    <div class="ready">
			    <div class="closed <?php echo (get_option('custom')) ? get_option('custom') : 'nocustom' ?>">
			    </div>				
				<div class="clear">
				    <div class="quarter">
				        <label><?php _e('Section BG', 'footbar'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="fowidbg" id="fowidbg" class="coloring" value="<?php echo get_option('fowidbg'); ?>"/> 
					</div>
				</div>
				
				<div class="clear">
				    <div class="quarter">
				        <label><?php _e('Text Color', 'footbar'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="fowidcol" id="fowidcol" class="coloring" value="<?php echo get_option('fowidcol'); ?>"/> 
					</div>
				    <div class="quarter">
				        <label><?php _e('Link Color', 'footbar'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="fowidlink" id="fowidlink" class="coloring" value="<?php echo get_option('fowidlink'); ?>"/> 
					</div>
				</div>
				
			</div>
		</td>
     </tr>
