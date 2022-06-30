		        <div class="madticker">
				    <div id="infotit">
			        	<span><?php echo (get_option('reinfo')) ? get_option('reinfo').'' : 'SEKILAS INFO' ?></span>
			    	</div>
				
			    	<div class="mask">
	    			<?php query_posts('post_type=sekilas-info&showposts=3'); ?>
				    	<?php if (have_posts()) { ?>
	    	                <ul id="wees-ticker" class="newstickers">
	    	                	<?php while (have_posts()): the_post(); ?>
	                                <li><span><?php the_time(); ?></span> / <?php if (function_exists('smart_excerpt')) smart_excerpt(get_the_excerpt(), 55); ?></li>
	     	                	<?php endwhile; ?>
                            </ul>
	    		        <?php } else { ?>
						    <ul id="wees-ticker" class="newstickers">
	                                <li><span>3 detik yang lalu</span> / Untuk menambahkan running text silahkan ke Dashboard > Sekilas Info</li>
                            </ul>
						<?php } ?>
					<?php wp_reset_query(); ?>
	    	     	</div>
					
					<div class="infotim">
					    <div class="jam"><?php echo (get_option('waktu')) ? get_option('waktu') : 'WAKTU' ?> <span id="time"></span>:<span id="minu"></span> <span id="secs"></span></div>
				    </div>
					
				</div>