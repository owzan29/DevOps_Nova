    <tr valign="top">
        <td class="tl">
		    <label><?php _e('Breadcrumb', 'medika'); ?></label>
		</td>
	    <td>
		    <div class="ready">
			    <div class="closed <?php echo (get_option('custom')) ? get_option('custom') : 'nocustom' ?>">
			    </div>				
				<div class="clear">
				    <div class="quarter">
				        <label><?php _e('Background', 'medika'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="bread" id="bread" class="coloring" value="<?php echo get_option('bread'); ?>"/> 
					</div>
				</div>
				
				<div class="clear">
				    <div class="quarter">
				        <label><?php _e('Text Color', 'medika'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="breadcol" id="breadcol" class="coloring" value="<?php echo get_option('breadcol'); ?>"/> 
					</div>
				    <div class="quarter">
				        <label><?php _e('Link Color', 'medika'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="breadlink" id="breadlink" class="coloring" value="<?php echo get_option('breadlink'); ?>"/> 
					</div>
				</div>
			</div>
		</td>
     </tr>