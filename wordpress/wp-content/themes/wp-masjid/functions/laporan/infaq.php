<?php 

/*** POST TYPE LAPORAN INFAQ ***/
	
	register_post_type( 'infaq',		
	array(			
	    'menu_icon' => 'dashicons-book-alt',
		'labels' => array(				
	    'name' => __( 'Laporan Infaq' ),				
	    'singular_name' => __( 'Laporan Infaq' ),        
	    'add_new' => __( '+ Laporan Baru' ),	
	    'add_new_item' => __( '+ Laporan Baru' ),	
	    'edit' => __( 'Edit' ),	 
	    'edit_item' => __( 'Edit Laporan' ),	
	    'new_item' => __( 'Item Baru' ),	
	    'view' => __( 'Lihat Laporan' ),	
	    'view_item' => __( 'Lihat Item' ),	
	    'search_items' => __( 'Cari Item' ),	
	    'not_found' => __( 'Tidak ada Laporan ditemukan' ),	
	    'not_found_in_trash' => __( 'Tidak ada Laporan di folder Trash' ),	
	    'parent' => __( 'Parent Super Duper' ),			
	    ),		                	
		'public' => true,           					            
		'has_archive' => true,        			            
		'supports' => array( 'title'),        			            
		'exclude_from_search' => false, 	 
		'register_meta_box_cb' => 'lap_infaq',
		 )	
    );
	
		function lap_infaq() {
	    add_meta_box('masjid_infaq', 'Laporan Infaq', 'masjid_infaq', 'infaq', 'normal', 'default');
	}

	function masjid_infaq() {
	    global $post;
	    echo '<input type="hidden" name="eventmeta_noncename" id="eventmeta_noncename" value="' .
	    wp_create_nonce( plugin_basename(__FILE__) ) . '" />';
 
        $status = get_post_meta($post->ID, '_status', true);
	    $tanginfaq = get_post_meta($post->ID, '_tanginfaq', true);
	    $juminfaq = get_post_meta($post->ID, '_juminfaq', true);
		$asalinfaq = get_post_meta($post->ID, '_asalinfaq', true);
		$ketinfaq = get_post_meta($post->ID, '_ketinfaq', true);
		
	        echo '<div style="overflow:hidden;"><p>';
			echo '<strong style="color: #f33;">KETERANGAN</strong> : Lengkapi data laporan infaq dibawah ini, Laporan Infaq terbaru akan ditampilkan di halaman Beranda<br/></p>';
			
		?>
		
		<div class="proadmin clear">
		    <div class="clear">
				<div class="">				
        			<div class="">
						
						<input type="radio" name="_status" <?php checked($status, 'masuk') ?> value="masuk"/><span class="stt" style="margin: 0 50px 0 0;"><?php _e('Dana Masuk', 'wpmasjid'); ?></span>
						<input type="radio" name="_status" <?php checked($status, 'keluar'); ?> value="keluar"/><span class="stt"><?php _e('Dana Keluar', 'wpmasjid'); ?></span>
						
					</div>
				</div>
			</div>
		</div>				
		
		<?php
		
	        echo '<p>Tanggal Pemasukan/Pengeluaran</p>';
	        echo '<input type="date" name="_tanginfaq" value="'.$tanginfaq.'" class="tanggal widefat" />';
	        echo '<p>Jumlah Dana (masukkan angka, misal : <em>1.000.000</em></p>';
	        echo '<input type="text" name="_juminfaq" value="'.$juminfaq.'" class="widefat" />';
			echo '<p>Daerah Asal (masukkan nama daerah, misal : <em>Lampung)</em></p>';
	        echo '<input type="text" name="_asalinfaq" value="'.$asalinfaq.'" class="widefat" />';
			echo '<p>Keterangan (<span style="color: #dd2222;">disini hanya jika laporan Dana Keluar</span>)</p>';
	        echo '<input type="text" name="_ketinfaq" value="'.$ketinfaq.'" class="widefat" />
		    	</div>';
				
			wp_enqueue_script( 'jquery' );
			wp_enqueue_script('jquery-ui-datepicker');
			
	}

	function masjid_infaq_meta($post_id, $post) {
	    if ( !isset( $_POST['eventmeta_noncename'] ) || !wp_verify_nonce( $_POST['eventmeta_noncename'], plugin_basename(__FILE__) )) {
			return $post->ID;
		}

	    if ( !current_user_can( 'edit_post', $post->ID ))
	        return $post->ID;

	    $events_meta['_status'] = $_POST['_status'];
		$events_meta['_tanginfaq'] = $_POST['_tanginfaq'];
		$events_meta['_juminfaq'] = $_POST['_juminfaq'];
		$events_meta['_asalinfaq'] = $_POST['_asalinfaq'];
		$events_meta['_ketinfaq'] = $_POST['_ketinfaq'];

	    foreach ($events_meta as $key => $value) {         
		    if( $post->post_type == 'revision' ) return; 
	        $value = implode(',', (array)$value); 
	        if(get_post_meta($post->ID, $key, FALSE)) { 
	            update_post_meta($post->ID, $key, $value);
	        } else { 
	            add_post_meta($post->ID, $key, $value);
	        }
	        if(!$value) delete_post_meta($post->ID, $key); 
	    }
	}

	add_action('save_post', 'masjid_infaq_meta', 1, 2); 
	
?>