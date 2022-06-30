		
	<tr valign="top">
        <td class="tl">
		    <label for="headbg"><?php _e('Partner', 'weesata'); ?></label>
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
				        <input type="text" name="partbg" id="partbg" class="coloring" value="<?php echo get_option('partbg'); ?>"/> 
					</div>
				</div>
				
				<div class="clear">
				    <div class="quarter">
				        <label for="dealay"><?php _e('Top Button Color', 'weesata'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="partbut" id="partbut" class="coloring" value="<?php echo get_option('partbut'); ?>"/> 
					</div>
					<div class="quarter">
				        <label for="dealay"><?php _e('Heading Span', 'weesata'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="partcol" id="partcol" class="coloring" value="<?php echo get_option('partcol'); ?>"/> 
					</div>
				</div>
			</div>
		</td>
     </tr>
	 