<?php 
	
/*** POST TYPE JADWAL SHALAT ***/		

	register_post_type( 'jadwal-jumat',		
	array(			
	    'menu_icon' => 'dashicons-calendar-alt',
		'labels' => array(				
	    'name' => __( 'Jadwal Jumat' ),				
	    'singular_name' => __( 'Jadwal Jumat' ),        
	    'add_new' => __( 'Tambah Jadwal?' ),	
	    'add_new_item' => __( 'Tambah Jadwal' ),	
	    'edit' => __( 'Edit' ),	 
	    'edit_item' => __( 'Edit Jadwal' ),	
	    'new_item' => __( 'Jadwal Baru' ),	
	    'view' => __( 'Lihat Jadwal' ),	
	    'view_item' => __( 'Lihat Jadwal' ),	
	    'search_items' => __( 'Cari Jadwal' ),	
	    'not_found' => __( 'Tidak ada Jadwal ditemukan' ),	
	    'not_found_in_trash' => __( 'Tidak ada Jadwal di folder Trash' ),	
	    'parent' => __( 'Parent Super Duper' ),			
	    ),		                	
		'public' => true,           					            
		'has_archive' => true,        			            
		'supports' => array( 'title'),        			            
		'exclude_from_search' => false, 	
        'register_meta_box_cb' => 'jumat_jadwal',
		 )	
    );
	
	function jumat_jadwal() {
	    add_meta_box('jumat_events', 'Jadwal Jumat', 'jumat_events', 'jadwal-jumat', 'normal', 'default');
	}

	function jumat_events() {
	    global $post;
	    echo '<input type="hidden" name="eventmeta_noncename" id="eventmeta_noncename" value="' .
	    wp_create_nonce( plugin_basename(__FILE__) ) . '" />';
        
		$jminus = strtotime(get_post_meta($post->ID, '_jevents', true));
	    $jevents = get_post_meta($post->ID, '_jevents', true);
	    $jjam = get_post_meta($post->ID, '_jjam', true);
		$jimam = get_post_meta($post->ID, '_jimam', true);
		$jkhatib = get_post_meta($post->ID, '_jkhatib', true);
		$jmuadzin = get_post_meta($post->ID, '_jmuadzin', true);
		$jbilal = get_post_meta($post->ID, '_jbilal', true);
		
	        echo '<strong style="color: #f33;">KETERANGAN</strong> : Pada bagian judul silahkan disini dengan tanggal bertepatan dengan hari pelaksanaan shalat jumat, misal <strong>1 Januari 2018</strong>. Judul ini nantinya tidak akan ditampilkan di halaman website tetapi harap untuk diisi dengan benar<br/><br/>
				';
			echo '<p>Tanggal</p>';
	        echo '<input type="date" name="_jevents" value="'.$jevents.'" class="jevents widefat" />';
	        echo '<p>Waktu Shalat (contoh 12:05)</p>';
	        echo '<input type="time" name="_jjam" value="'.$jjam.'" class="widefat" />';
			echo '<p>Petugas Imam</p>';
	        echo '<input type="text" name="_jimam" value="'.$jimam.'" class="widefat" />';
			echo '<p>Petugas Khatib</p>';
	        echo '<input type="text" name="_jkhatib" value="'.$jkhatib.'" class="widefat" />';
			echo '<p>Petugas Muadzin</p>';
	        echo '<input type="text" name="_jmuadzin" value="'.$jmuadzin.'" class="widefat" />';
			echo '<p>Petugas Bilal</p>';
	        echo '<input type="text" name="_jbilal" value="'.$jbilal.'" class="widefat" />';
			
	        wp_enqueue_script('jquery');
	    	wp_enqueue_script('jquery-ui-datepicker');
			
	}

	function jumat_events_meta($post_id, $post) {
	    if ( !isset( $_POST['eventmeta_noncename'] ) || !wp_verify_nonce( $_POST['eventmeta_noncename'], plugin_basename(__FILE__) )) {
			return $post->ID;
		}

	    if ( !current_user_can( 'edit_post', $post->ID ))
	        return $post->ID;
        
		$events_meta['_jminus'] = strtotime($_POST['_jevents']);
	    $events_meta['_jevents'] = $_POST['_jevents'];
		$events_meta['_jjam'] = $_POST['_jjam'];
		$events_meta['_jimam'] = $_POST['_jimam'];
		$events_meta['_jkhatib'] = $_POST['_jkhatib'];
		$events_meta['_jmuadzin'] = $_POST['_jmuadzin'];
		$events_meta['_jbilal'] = $_POST['_jbilal'];

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

	add_action('save_post', 'jumat_events_meta', 1, 2); 
	
?>