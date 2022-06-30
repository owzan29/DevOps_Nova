<?php 

/*** POST TYPE LAPORAN INFAQ ***/
	
	register_post_type( 'wakaf',		
	array(			
	    'menu_icon' => 'dashicons-book-alt',
		'labels' => array(				
	    'name' => __( 'Laporan Wakaf' ),				
	    'singular_name' => __( 'Laporan Wakaf' ),        
	    'add_new' => __( '+ Pemberi Wakaf' ),	
	    'add_new_item' => __( '+ Pemberi Wakaf' ),	
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
		'supports' => array( 'title', 'editor', 'thumbnail'),        			            
		'exclude_from_search' => false, 	 
		'register_meta_box_cb' => 'lap_wakaf',
		 )	
    );
	
		function lap_wakaf() {
	    add_meta_box('masjid_wakaf', 'Data Wakaf Masuk', 'masjid_wakaf', 'wakaf', 'normal', 'default');
	}

	function masjid_wakaf() {
	    global $post;
	    echo '<input type="hidden" name="eventmeta_noncename" id="eventmeta_noncename" value="' .
	    wp_create_nonce( plugin_basename(__FILE__) ) . '" />';

	    $tangwakaf = get_post_meta($post->ID, '_tangwakaf', true);
	    $jumwakaf = get_post_meta($post->ID, '_jumwakaf', true);
		$asalwakaf = get_post_meta($post->ID, '_asalwakaf', true);
		
	        echo '<div style="overflow:hidden;"><p>';
			echo '<strong style="color: #f33;">KETERANGAN</strong> : Lengkapi data laporan wakaf dibawah ini, Laporan Wakaf terbaru akan ditampilkan di halaman Beranda<br/><br/></p>';
			echo '<p>Tanggal Wakaf</p>';
	        echo '<input type="date" name="_tangwakaf" value="'.$tangwakaf.'" class="tanggal widefat" />';
	        echo '<p>Keterangan Wakaf</em></p>';
	        echo '<input type="text" name="_jumwakaf" value="'.$jumwakaf.'" class="widefat" />';
			echo '<p>Daerah Asal (masukkan nama daerah, misal : <em>Lampung</em></p>';
	        echo '<input type="text" name="_asalwakaf" value="'.$asalwakaf.'" class="widefat" />
		    	</div>';
			
	}

	function masjid_wakaf_meta($post_id, $post) {
	    if ( !isset( $_POST['eventmeta_noncename'] ) || !wp_verify_nonce( $_POST['eventmeta_noncename'], plugin_basename(__FILE__) )) {
			return $post->ID;
		}

	    if ( !current_user_can( 'edit_post', $post->ID ))
	        return $post->ID;

	    $events_meta['_tangwakaf'] = $_POST['_tangwakaf'];
		$events_meta['_jumwakaf'] = $_POST['_jumwakaf'];
		$events_meta['_asalwakaf'] = $_POST['_asalwakaf'];

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

	add_action('save_post', 'masjid_wakaf_meta', 1, 2); 
	
?>