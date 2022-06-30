<?php if (have_posts()): ?>

	<div id="loop" class="mas-nav clear">
	    <div class="arcin">
	    	<div class="lap-infaq">
	        	<table class="infaq">
		        	<tr class="inhead">
				        <td><strong>TGL</strong></td>
			    		<td><strong>IMAM</strong></td>
				    	<td><strong>KHATIB</strong></td>
				    	<td><strong>MUAZDIN</strong></td>
						<td><strong>BILAL</strong></td>
					</tr>
			        <?php while (have_posts()): the_post(); ?>
					<?php 
				        global $post; 
				    	$jimam = get_post_meta($post->ID, '_jimam', true);
						$jkhatib = get_post_meta($post->ID, '_jkhatib', true);
						$jmuadzin = get_post_meta($post->ID, '_jmuadzin', true);
						$jbilal = get_post_meta($post->ID, '_jbilal', true);
		     	    ?>
					
					    <tr>
							<td><?php the_title(); ?></td>
							<td><?php echo $jimam; ?></td>
							<td><?php echo $jkhatib; ?></td>
					        <td><?php echo $jmuadzin; ?></td>
							<td><?php echo $jbilal; ?></td>
						</tr>
						
					<?php endwhile; ?>
				</table>
			</div>
		</div>
	</div>

<?php endif; ?>
