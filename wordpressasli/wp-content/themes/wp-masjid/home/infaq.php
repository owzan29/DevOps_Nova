    <div class="blockinfaq clear">
	
	    <!-- LAPORAN INFAQ -->
	    <div class="pepinfaq">
		    <h3><span><?php echo (get_option('lapin')) ? get_option('lapin') : 'LAPORAN INFAQ' ?></span></h3>
		
	    	<?php
  			    query_posts( array( 
		            'post_type' => 'infaq', 
		            'meta_key' => '_status',
					'showposts' => 7,
		            'meta_query' => array(
			            array(
				        'key' => '_status',
				        'value' => 'masuk',
				        )
			        )
		        ) 
	        );
			?>
			<div class="lap-infaq clear">
				<table class="infaq">
				    <tr><td><strong>JUMLAH</strong></td><td class="tglnol"><strong>TGL</strong></td><td><strong>DARI</strong></td></tr>
				    <?php if (have_posts()) { ?>
					    <?php while (have_posts()): the_post(); ?>
						<tr>
				    		<td><strong><?php echo 'Rp. '.get_post_meta($post->ID, '_juminfaq', true); ?></strong></td>
							<td class="tglnol"><?php echo get_post_meta($post->ID, '_tanginfaq', true); ?></td>
							<td><?php the_title(); ?></td>
						</tr>
						<?php endwhile; ?>
		    		<?php } ?>
				</table>
			</div>
			<?php wp_reset_query(); ?>
		</div>
		<!-- LAPORAN INFAQ -->
						
		<!-- PENGUMUMAN -->
		<div class="yukinfaq">
	     	<h3><span><?php echo (get_option('marin')) ? get_option('marin') : 'MARI BER-INFAQ' ?></span></h3>
		
		    <div class="peng-text">
						<div class="lapdain">
							LAPORAN SALDO DANA INFAQ
						</div>
						
						
		<?php  
            query_posts( array( 
	    	'post_type' => 'infaq', 
	    	'meta_key' => '_status',
	    	'showposts' => 200000,
	    	));
		?>
	
        <?php if (have_posts()) { ?>
			    
	    	    <?php 
				    $kel = 0;
					$mas = 0;
					while (have_posts()): the_post(); 
				?>
                    <?php 
				    global $post; 
					$status = get_post_meta($post->ID, '_status', true);
					if ( $status == 'keluar' ) {
					$masuk = 0;
					$keluar = get_post_meta($post->ID, '_juminfaq', true);
					}
					if ( $status == 'masuk' ) {
					$masuk = get_post_meta($post->ID, '_juminfaq', true);
					$keluar = 0;
					}
					$masu = str_replace(".","",$masuk);
					$kelu = str_replace(".","",$keluar);
					$kel += $kelu;
					$mas += $masu;
					$final = $mas-$kel;
				    ?>
				    <?php echo ''; ?>
		    	<?php endwhile; ?>
				
				<div class="saldo">
					SALDO : <strong>Rp <?php echo number_format($final,0,'.','.'); ?>,-</strong>
				</div>
				
	    <?php } else { ?>
		        <div class="saldo">
					SALDO : <strong>Belum ada laporan</strong>
				</div>
		<?php } ?>
        <?php wp_reset_query(); ?>
						
						
						
						
						
						
						
						
						<div class="lapdain">
						    Salurkan infaq Anda melalui rekening berikut
						</div>
						<div class="latest owl-carousel owl-theme">
						    <?php if (get_option('bank1')) { ?>
							<div class="item">
								<strong><?php echo get_option('bank1'); ?></strong><br/>
								Kode : <?php echo get_option('kode1'); ?><br/><?php echo get_option('rek1'); ?><br/>
								Atas Nama : <?php echo get_option('atas1'); ?>
							</div>
							<?php } ?>
							<?php if (get_option('bank2')) { ?>
							<div class="item">
								<strong><?php echo get_option('bank2'); ?></strong><br/>
								Kode : <?php echo get_option('kode2'); ?><br/><?php echo get_option('rek2'); ?><br/>
								Atas Nama : <?php echo get_option('atas2'); ?>
							</div>
							<?php } ?>
							<?php if (get_option('bank3')) { ?>
							<div class="item">
								<strong><?php echo get_option('bank3'); ?></strong><br/>
								Kode : <?php echo get_option('kode3'); ?><br/><?php echo get_option('rek3'); ?><br/>
								Atas Nama : <?php echo get_option('atas3'); ?>
							</div>
							<?php } ?>
							<?php if (get_option('bank4')) { ?>
							<div class="item">
								<strong><?php echo get_option('bank4'); ?></strong><br/>
								Kode : <?php echo get_option('kode4'); ?><br/><?php echo get_option('rek4'); ?><br/>
								Atas Nama : <?php echo get_option('atas4'); ?>
							</div>
							<?php } ?>
						</div>
						<div class="link-in">
		                    <a href="<?php echo get_post_type_archive_link( 'infaq' ); ?>">
			                    <div class="butin">LIHAT LAPORAN</div>
			                </a>
		                </div>
		   	</div>
			
		</div>
		<!-- PENGUMUMAN -->
	</div>