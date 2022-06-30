    <tr valign="top">
        <td class="tl">
		    <label for="headbg"><?php _e('Testimoni Section', 'weesata'); ?></label>
		</td>
	    <td> 
		    <div class="ready">
			    <div class="closed <?php echo (get_option('custom')) ? get_option('custom') : 'nocustom' ?>">
			    </div>
				
				<div class="clear">
				    <div class="quarter">
				        <label for="roombg"><?php _e('Background', 'weesata'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="teslay" id="teslay" class="coloring" value="<?php echo get_option('teslay'); ?>"/> 
					</div>
					<div class="quarter">
					    <label><?php _e('Opacity', 'weesata'); ?></label>
					</div>
					<div class="quarter">
			        	<input name="teslayop" id="teslayop" style="width: 100%;" type="range" min="0.001" max="1" step="0.001" value="<?php echo get_option('teslayop'); ?>" data-orientation="vertical" />
                    </div>
				</div>
				</div>
				
				<div class="clear">
				    <div class="quarter">
				        <label for="classhead"><?php _e('Text Color', 'weesata'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="tescol" id="tescol" class="coloring" value="<?php echo get_option('tescol'); ?>"/> 
					</div>
				    <div class="quarter">
				        <label for="buttext"><?php _e('Star Color', 'weesata'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="starcol" id="starcol" class="coloring" value="<?php echo get_option('starcol'); ?>"/> 
					</div>
				</div
				
			</div>
		</td>
     </tr>