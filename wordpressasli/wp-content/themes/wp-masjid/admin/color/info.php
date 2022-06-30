	<tr valign="top">
        <td class="tl">
		    <label for="headbg"><?php _e('Sekilas Info', 'weesata'); ?></label>
		</td>
	    <td> 
		    <div class="ready">
			    <div class="closed <?php echo (get_option('custom')) ? get_option('custom') : 'nocustom' ?>">
			    </div>
			    <div class="clear">
				    <div class="full">
				        Bagian ini mengatur pewarnaan pada Text Berjalan
						<br/><br/>
					</div>
				</div>
				
				<div class="clear">
				    <div class="quarter">
				        <label for="sboxbg"><?php _e('Background', 'weesata'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="sinbg" id="sinbg" class="coloring" value="<?php echo get_option('sinbg'); ?>"/> 
					</div>
					<div class="quarter">
					    <label><?php _e('Opacity', 'weesata'); ?></label>
					</div>
					<div class="quarter">
			        	<input name="sinbgop" id="sinbgop" style="width: 100%;" type="range" min="0.001" max="1" step="0.001" value="<?php echo get_option('sinbgop'); ?>" data-orientation="vertical" />
                    </div>
				</div>
				
				<div class="clear">
				    <div class="quarter">
				        <label for="slihco"><?php _e('Text Color', 'weesata'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="sincol" id="sincol" class="coloring" value="<?php echo get_option('sincol'); ?>"/> 
					</div>
				</div>
				
				<div class="clear">
				    <div class="quarter">
				        <label for="slihco"><?php _e('Left Text BG', 'weesata'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="sintbg" id="sintbg" class="coloring" value="<?php echo get_option('sintbg'); ?>"/> 
					</div>
				    <div class="quarter">
				        <label for="simbg"><?php _e('Left Text Color', 'weesata'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="sintcol" id="sintcol" class="coloring" value="<?php echo get_option('sintcol'); ?>"/> 
					</div>
				</div>

			</div>
		</td>
     </tr>
