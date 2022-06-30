	<tr valign="top">
        <td class="tl">
		    <label for="headbg"><?php _e('Home Package', 'weesata'); ?></label>
		</td>
	    <td> 
		    <div class="ready">
			    <div class="closed <?php echo (get_option('custom')) ? get_option('custom') : 'nocustom' ?>">
			    </div>
			    <div class="clear">
				    <div class="full">
				        Bagian ini mengatur pewarnaan Daftar Paket
						<br/><br/>
					</div>
				</div>
				
				<div class="clear">
				    <div class="quarter">
				        <label for="sboxbg"><?php _e('Background', 'weesata'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="pacbg" id="pacbg" class="coloring" value="<?php echo get_option('pacbg'); ?>"/> 
					</div>
					<div class="quarter">
				        <label for="sboxbg"><?php _e('Text Color', 'weesata'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="paccol" id="paccol" class="coloring" value="<?php echo get_option('paccol'); ?>"/> 
					</div>
				</div>
				
				<div class="clear">
				    <div class="quarter">
				        <label for="slihco"><?php _e('Normal Price', 'weesata'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="norprice" id="norprice" class="coloring" value="<?php echo get_option('norprice'); ?>"/> 
					</div>
				    <div class="quarter">
				        <label for="simbg"><?php _e('Discount Price', 'weesata'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="disprice" id="disprice" class="coloring" value="<?php echo get_option('disprice'); ?>"/> 
					</div>
				</div>
				
				<div class="clear">
				    <div class="quarter">
				        <label for="slihco"><?php _e('Pack Day BG', 'weesata'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="pdbg" id="pdbg" class="coloring" value="<?php echo get_option('pdbg'); ?>"/> 
					</div>
				    <div class="quarter">
				        <label for="simbg"><?php _e('Pack Day Color', 'weesata'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="pdcol" id="pdcol" class="coloring" value="<?php echo get_option('pdcol'); ?>"/> 
					</div>
				</div>
				
				<div class="clear">
				    <div class="quarter">
				        <label for="slihco"><?php _e('Populer Left BG', 'weesata'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="pplbg" id="pplbg" class="coloring" value="<?php echo get_option('pplbg'); ?>"/> 
					</div>
				    <div class="quarter">
				        <label for="simbg"><?php _e('Popular Right BG', 'weesata'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="pprbg" id="pprbg" class="coloring" value="<?php echo get_option('pprbg'); ?>"/> 
					</div>
				</div>
				
				<div class="clear">
				    <div class="quarter">
				        <label for="slihco"><?php _e('Populer Text', 'weesata'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="ppcol" id="ppcol" class="coloring" value="<?php echo get_option('ppcol'); ?>"/> 
					</div>
				</div>
				
				<div class="clear">
				    <div class="quarter">
				        <label for="slihco"><?php _e('Promo BG', 'weesata'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="probg" id="probg" class="coloring" value="<?php echo get_option('probg'); ?>"/> 
					</div>
				    <div class="quarter">
				        <label for="simbg"><?php _e('Promo Text', 'weesata'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="protcol" id="protcol" class="coloring" value="<?php echo get_option('protcol'); ?>"/> 
					</div>
				</div>

			</div>
		</td>
     </tr>
