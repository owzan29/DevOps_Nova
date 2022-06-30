	<tr valign="top">
        <td class="tl">
		    <label><?php _e('Pagination', 'idealer'); ?></label>
		</td>
	    <td>
		    <div class="ready">
			    <div class="closed <?php echo (get_option('custom')) ? get_option('custom') : 'nocustom' ?>">
			    </div>				
				<div class="clear">
				    <div class="quarter">
				        <label><?php _e('Link BG', 'idealer'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="pglibg" id="pglibg" class="coloring" value="<?php echo get_option('pglibg'); ?>"/> 
					</div>
				    <div class="quarter">
				        <label><?php _e('Link Color', 'idealer'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="pglico" id="pglico" class="coloring" value="<?php echo get_option('pglico'); ?>"/> 
					</div>
				</div>
				
				<div class="clear">
				    <div class="quarter">
				        <label><?php _e('Link Hover BG', 'idealer'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="pglihobg" id="pglihobg" class="coloring" value="<?php echo get_option('pglihobg'); ?>"/> 
					</div>
					<div class="quarter">
				        <label><?php _e('Link Hover Color', 'idealer'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="pglihoco" id="pglihoco" class="coloring" value="<?php echo get_option('pglihoco'); ?>"/> 
					</div>
				</div>
			</div>
		</td>
     </tr>