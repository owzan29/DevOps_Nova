<?php 

/*** POST TYPE inv ***/
	
	register_post_type( 'takmir',		
	array(			
	    'menu_icon' => 'dashicons-feedback',
	    'labels' => array(				
	    'name' => __( 'Takmir Masjid' ),				
	    'singular_name' => __( 'Takmir Masjid' ),        
	    'add_new' => __( 'Tambah Baru?' ),	
	    'add_new_item' => __( 'Tambah Baru' ),	
	    'edit' => __( 'Edit' ),	 
	    'edit_item' => __( 'Edit Takmir' ),	
	    'new_item' => __( 'Tambah Baru' ),	
	    'view' => __( 'Lihat Takmir' ),	
	    'view_item' => __( 'Lihat Takmir' ),	
	    'search_items' => __( 'Cari Takmir' ),	
	    'not_found' => __( 'Tidak ada Takmir ditemukan' ),	
	    'not_found_in_trash' => __( 'Tidak ada Takmir di folder Trash' ),	
	    'parent' => __( 'Parent Super Duper' ),			
	    ),		                	
		'public' => true,           					            
		'has_archive' => true,        			            
		'supports' => array( 'title', 'editor', 'thumbnail'),        			            
		'exclude_from_search' => false, 			
		'register_meta_box_cb' => 'tak',
		 )	
    );
	
		function tak() {
	    add_meta_box('masjid_tak', 'Jabatan / Posisi Takmir', 'masjid_tak', 'takmir', 'normal', 'default');
	}

	function masjid_tak() {
	    global $post;
	    echo '<input type="hidden" name="eventmeta_noncename" id="eventmeta_noncename" value="' .
	    wp_create_nonce( plugin_basename(__FILE__) ) . '" />';
	    $jabat = get_post_meta($post->ID, '_jabat', true);

	        echo '<p>Tambahkan nama posisi dalam kepengurusan (Penasehat, Ketua, dll)</p>';
	        echo '<input type="text" name="_jabat" value="' . $jabat  . '" class="widefat" />';
	}

	function masjid_tak_meta($post_id, $post) {

	    if ( !isset( $_POST['eventmeta_noncename'] ) || !wp_verify_nonce( $_POST['eventmeta_noncename'], plugin_basename(__FILE__) )) {
			return $post->ID;
		}

	    if ( !current_user_can( 'edit_post', $post->ID ))

	        return $post->ID;

	    $events_meta['_jabat'] = $_POST['_jabat'];

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

	add_action('save_post', 'masjid_tak_meta', 1, 2); // save the custom fields
?>