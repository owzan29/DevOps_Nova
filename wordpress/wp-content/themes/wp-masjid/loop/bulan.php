		<?php  
		    $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
			$slu = $term->slug;
		    $paged = ( get_query_var ('paged') ) ? get_query_var('paged') : 1 ;
            query_posts( array( 
	    	'post_type' => 'infaq', 
	    	'meta_key' => '_status',
	    	'showposts' => 2000,
			'paged' => $paged,
			'tax_query' => array(
			    array(
				'taxonomy' => 'bulan',
				'terms' => $slu,
				'field' => 'slug'
				)
			)
	    	));
		?>

<?php if (have_posts()): ?>

<div class="mas-nav clear">
	<div class="arcin">
	<div class="lap-infaq">
		<table class="infaq">
			<tr class="inhead">
			    <td><strong>TGL</strong></td>
				<td><strong>DARI</strong></td>
				<td><strong>MASUK</strong></td>
				<td><strong>KELUAR</strong></td>
			</tr>
			
			<?php 
				    $kel = 0;
					$mas = 0;
					while (have_posts()): the_post(); 
				?>
                    <?php 
				    global $post; 
					$dns = get_post_meta($post->ID, '_status', true);
					if ( $dns == 'keluar' ) {
					$masuk = 0;
					$keluar = get_post_meta($post->ID, '_juminfaq', true);
					}
					if ( $dns == 'masuk' ) {
					$masuk = get_post_meta($post->ID, '_juminfaq', true);
					$keluar = 0;
					}
					$masu = str_replace(".","",$masuk);
					$kelu = str_replace(".","",$keluar);
					$kel += $kelu;
					$mas += $masu;
					$final = $mas-$kel;
				    ?>

                <?php 
          			$tanginfaq = get_post_meta($post->ID, '_tanginfaq', true);
        	    	$asalinfaq = get_post_meta($post->ID, '_asalinfaq', true);
		     	?>
				
			            <tr>
							<td><?php echo get_post_meta($post->ID, '_tanginfaq', true); ?></td>
							<td><?php the_title(); ?></td>
							<td>
							    <?php if ( $dns == 'masuk' ) { echo '<span class="blue">Rp '.$masuk.'</span>'; } ?>
							</td>
					        <td>
							    <?php if ( $dns == 'keluar' ) { echo '<span class="red">Rp '.$keluar.'</span>'; } ?>
							</td>
						</tr>
			
        	<?php endwhile; ?>
			    <tr class="trbot">
					<td colspan="2">Total Dana Bulan Ini</td>
					<td class="ct td130"><span class="blue">Rp <?php echo number_format($mas,0,'.','.'); ?></span></td>
					<td class="ct td130"><span class="red">Rp <?php echo number_format($kel,0,'.','.'); ?></span></td>
				</tr>
				<tr class="trbot">
					<td colspan="2">Selisih / Dana Tersisa</td>
					<td colspan="2" class="cto">
					<?php if ( $final > 0 ) { ?>
					    <span class="blue">Rp <?php echo number_format($final,0,'.','.'); ?></span>
					<?php } else { ?>
				    	<span class="red">Rp <?php echo number_format($final,0,'.','.'); ?></span>
					<?php } ?>
					</td>
				</tr>
        </table>
	</div>
    </div>
</div>

<?php endif; ?>

