
	<tr valign="top">
        <td class="tl">
		    <label><?php _e('Text Tambahan', 'footbar'); ?></label>
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
				        <input type="text" name="tetabg" id="tetabg" class="coloring" value="<?php echo get_option('tetabg'); ?>"/> 
					</div>
				</div>
				
				<div class="clear">
				    <div class="quarter">
				        <label><?php _e('Text Color', 'footbar'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="tetacol" id="tetacol" class="coloring" value="<?php echo get_option('tetacol'); ?>"/> 
					</div>
				    <div class="quarter">
				        <label><?php _e('Link Color', 'footbar'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="tetalink" id="tetalink" class="coloring" value="<?php echo get_option('tetalink'); ?>"/> 
					</div>
				</div>
				
			</div>
		</td>
     </tr>
