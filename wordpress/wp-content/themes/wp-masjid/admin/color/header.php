
		
	<tr valign="top" class="hone <?php echo get_option('comheader'); ?>">
        <td class="tl">
		    <label for="headbg"><?php _e('Header Logo', 'medika'); ?></label>
		</td>
	    <td> 
		    <div class="ready">
			    <div class="closed <?php echo (get_option('custom')) ? get_option('custom') : 'nocustom' ?>">
			    </div>
				
				<div class="clear">
				    <div class="quarter">
				        <label for="logobg"><?php _e('Logo BG', 'weesata'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="logobg" id="logobg" class="coloring" value="<?php echo get_option('logobg'); ?>"/> 
					</div>
				</div>
			</div>
		</td>
	</tr>
	
	<tr valign="top" class="hone <?php echo get_option('comheader'); ?>">
        <td class="tl">
		    <label for="headbg"><?php _e('Header', 'weesata'); ?></label>
		</td>
	    <td> 
		    <div class="ready">
			    <div class="closed <?php echo (get_option('custom')) ? get_option('custom') : 'nocustom' ?>">
			    </div>
				
				<div class="clear">
				    <div class="quarter">
				        <label for="htopbg"><?php _e('Header BG', 'weesata'); ?></label> 
					</div>
					<div class="quarter">
				        <input type="text" name="headerbg" id="headerbg" class="coloring" value="<?php echo get_option('headerbg'); ?>"/> 
					</div>
					<div class="quarter">
					    <label><?php _e('Opacity', 'weesata'); ?></label>
					</div>
					<div class="quarter">
			        	<input name="headerbgop" id="headerbgop" style="width: 100%;" type="range" min="0.001" max="1" step="0.001" value="<?php echo get_option('headerbgop'); ?>" data-orientation="vertical" />
                    </div>
				</div>
				
				<div class="clear">
					<div class="quarter">
					    <label><?php _e('Search Header BG', 'weesata'); ?></label>
					</div>
					<div class="quarter">
			        	<input type="text" name="hsearchbg" id="hsearchbg" class="coloring" value="<?php echo get_option('hsearchbg'); ?>"/> 
                    </div>
					<div class="quarter">
					    <label><?php _e('Input Color', 'weesata'); ?></label>
					</div>
					<div class="quarter">
			        	<input type="text" name="hsearchcol" id="hsearchcol" class="coloring" value="<?php echo get_option('hsearchcol'); ?>"/> 
                    </div>
				</div>
				
				<div class="clear">
					<div class="quarter">
					    <label><?php _e('Contact Header BG', 'weesata'); ?></label>
					</div>
					<div class="quarter">
			        	<input type="text" name="hconbg" id="hconbg" class="coloring" value="<?php echo get_option('hconbg'); ?>"/> 
                    </div>
					<div class="quarter">
					    <label><?php _e('Text Color', 'weesata'); ?></label>
					</div>
					<div class="quarter">
			        	<input type="text" name="hconcol" id="hconcol" class="coloring" value="<?php echo get_option('hconcol'); ?>"/> 
                    </div>
				</div>
				
				<div class="clear">
					<div class="quarter">
					    <label><?php _e('Icon Header Color', 'weesata'); ?></label>
					</div>
					<div class="quarter">
			        	<input type="text" name="iheaco" id="iheaco" class="coloring" value="<?php echo get_option('iheaco'); ?>"/> 
                    </div>
				</div>
			</div>
		</td>
	</tr>
	
	<tr valign="top" class="hone <?php echo get_option('comheader'); ?>">
        <td class="tl">
		    <label for="headbg"><?php _e('Main Menu', 'weesata'); ?></label>
		</td>
	    <td> 
		    <div class="ready">
			    <div class="closed <?php echo (get_option('custom')) ? get_option('custom') : 'nocustom' ?>">
			    </div>
				
				<div class="clear">
				    <div class="quarter">
				        <label for="menucol"><?php _e('Menu Color', 'weesata'); ?></label>
					</div>
				    <div class="quarter">
				        <input type="text" name="menucol" id="menucol" class="coloring" value="<?php echo get_option('menucol'); ?>"/> 
					</div>
				</div>
				
				<div class="clear">
					<div class="quarter">
					    <label for="lvlhbg"><?php _e('Menu Span BG', 'weesata'); ?></label>
					</div>
					<div class="quarter">
				        <input type="text" name="mespbg" id="mespbg" class="coloring" value="<?php echo get_option('mespbg'); ?>"/> 
					</div>
					<div class="quarter">
					    <label for="mmbdr"><?php _e('Menu Span Color', 'weesata'); ?></label>
					</div>
					<div class="quarter">
				        <input type="text" name="mespcol" id="mespcol" class="coloring" value="<?php echo get_option('mespcol'); ?>"/> 
					</div>
				</div>
				
				<div class="clear">
				    <div class="quarter">
				        <label for="menhcol"><?php _e('Lev 1 Menu BG', 'weesata'); ?></label>
					</div>
				    <div class="quarter">
				        <input type="text" name="levmenubg" id="levmenubg" class="coloring" value="<?php echo get_option('levmenubg'); ?>"/> 
					</div>
					<div class="quarter">
					    <label for="mmhvbdr"><?php _e('Menu Color', 'weesata'); ?></label>
					</div>
					<div class="quarter">
				        <input type="text" name="levmenucol" id="levmenucol" class="coloring" value="<?php echo get_option('levmenucol'); ?>"/> 
					</div>
				</div>
				
				<div class="clear">
				    <div class="quarter">
				        <label for="menhcol"><?php _e('Lev 2 Menu BG', 'weesata'); ?></label>
					</div>
				    <div class="quarter">
				        <input type="text" name="lev2menubg" id="lev2menubg" class="coloring" value="<?php echo get_option('lev2menubg'); ?>"/> 
					</div>
					<div class="quarter">
					    <label for="mmhvbdr"><?php _e('Menu Color', 'weesata'); ?></label>
					</div>
					<div class="quarter">
				        <input type="text" name="lev2menucol" id="lev2menucol" class="coloring" value="<?php echo get_option('lev2menucol'); ?>"/> 
					</div>
				</div>
				
				<div class="clear">
				    <div class="quarter">
				        <label for="menhcol"><?php _e('Lev 3 Menu BG', 'weesata'); ?></label>
					</div>
				    <div class="quarter">
				        <input type="text" name="lev3menubg" id="lev3menubg" class="coloring" value="<?php echo get_option('lev3menubg'); ?>"/> 
					</div>
					<div class="quarter">
					    <label for="mmhvbdr"><?php _e('Menu Color', 'weesata'); ?></label>
					</div>
					<div class="quarter">
				        <input type="text" name="lev3menucol" id="lev3menucol" class="coloring" value="<?php echo get_option('lev3menucol'); ?>"/> 
					</div>
				</div>
				
			</div>
		</td>
	</tr>
	
	
	
	<tr valign="top" class="hone <?php echo get_option('comheader'); ?>">
        <td class="tl">
		    <label for="headbg"><?php _e('Online Hours Header', 'weesata'); ?></label>
		</td>
	    <td> 
		    <div class="ready">
			    <div class="closed <?php echo (get_option('custom')) ? get_option('custom') : 'nocustom' ?>">
			    </div>
				
				<div class="clear">
				    <div class="quarter">
					    <label for="lvlsbg"><?php _e('Background', 'weesata'); ?></label>
					</div>
					<div class="quarter">
				        <input type="text" name="hourbg" id="hourbg" class="coloring" value="<?php echo get_option('hourbg'); ?>"/> 
					</div>
					<div class="quarter">
					    <label for="lvlhbg"><?php _e('Color', 'weesata'); ?></label>
					</div>
					<div class="quarter">
				        <input type="text" name="hourcol" id="hourcol" class="coloring" value="<?php echo get_option('hourcol'); ?>"/> 
					</div>
				</div>
				<div class="clear">
				    <div class="quarter">
					    <label for="lvlsbg"><?php _e('Top Title BG', 'weesata'); ?></label>
					</div>
					<div class="quarter">
				        <input type="text" name="thourbg" id="thourbg" class="coloring" value="<?php echo get_option('thourbg'); ?>"/> 
					</div>
					<div class="quarter">
					    <label for="lvlhbg"><?php _e('Title Color', 'weesata'); ?></label>
					</div>
					<div class="quarter">
				        <input type="text" name="thourcol" id="thourcol" class="coloring" value="<?php echo get_option('thourcol'); ?>"/> 
					</div>
				</div>
			</div>
		</td>
	</tr>
	
	
	
	<tr valign="top" class="hone <?php echo get_option('comheader'); ?>">
        <td class="tl">
		    <label for="headbg"><?php _e('Sosial Media Header', 'weesata'); ?></label>
		</td>
	    <td> 
		    <div class="ready">
			    <div class="closed <?php echo (get_option('custom')) ? get_option('custom') : 'nocustom' ?>">
			    </div>
				
				<div class="clear">
				    <div class="quarter">
					    <label for="lvlsbg"><?php _e('Background', 'weesata'); ?></label>
					</div>
					<div class="quarter">
				        <input type="text" name="sosmediabg" id="sosmediabg" class="coloring" value="<?php echo get_option('sosmediabg'); ?>"/> 
					</div>
					<div class="quarter">
					    <label for="lvlhbg"><?php _e('Color', 'weesata'); ?></label>
					</div>
					<div class="quarter">
				        <input type="text" name="sosmediacol" id="sosmediacol" class="coloring" value="<?php echo get_option('sosmediacol'); ?>"/> 
					</div>
				</div>
				<div class="clear">
				    <div class="quarter">
					    <label for="lvlsbg"><?php _e('Top Title BG', 'weesata'); ?></label>
					</div>
					<div class="quarter">
				        <input type="text" name="tsmbg" id="tsmbg" class="coloring" value="<?php echo get_option('tsmbg'); ?>"/> 
					</div>
					<div class="quarter">
					    <label for="lvlhbg"><?php _e('Title Color', 'weesata'); ?></label>
					</div>
					<div class="quarter">
				        <input type="text" name="tsmcol" id="tsmcol" class="coloring" value="<?php echo get_option('tsmcol'); ?>"/> 
					</div>
				</div>
				
			</div>
		</td>
	</tr>
		
