<?php

function idealer_setup() {
    $sheight = get_option('sheight');
			if ( ! $sheight ) {
			$sheight = 500;
	    	}
	$swidth = get_option('swidth');
			if ( ! $swidth ) {
			$swidth = 1200;
	    	}
	add_theme_support('automatic-feed-links');
	add_theme_support( 'title-tag' );
	
	// Fungsi untuk create ukuran gambar baru
	add_theme_support('post-thumbnails');
	add_image_size('mini-thumbnail', 50, 50, true); // gambar kecil
	add_image_size('slide', $swidth, $sheight, true);
	add_image_size('thumb', 600, 450, true); // gambar thumbnail
	add_image_size('medthumb', 320, 240, true); // gambar thumbnail kecil
	add_image_size('fopengurus', 300, 400, true); // gambar thumbnail kecil

	register_nav_menus(array(
		'navigation' => __('Navigasi', 'idealer'),
	));

	add_theme_support('html5', array(
		'search-form', 'comment-form', 'comment-list',
	));
}
add_action('after_setup_theme', 'idealer_setup');

if (is_admin() && isset($_GET['activated']) && $pagenow == 'themes.php') {
	update_option('posts_per_page', 8);
	update_option('paging_mode', 'default');
}


function wpbeginner_numeric_posts_nav() {

	if( is_singular() )
		return;
	global $wp_query;

	if( $wp_query->max_num_pages <= 1 )
		return;

	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
	$max   = intval( $wp_query->max_num_pages );
	if ( $paged >= 1 )
		$links[] = $paged;
	if ( $paged >= 3 ) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}

	if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}

	if ( ! in_array( 1, $links ) ) {
		$class = 1 == $paged ? ' class="active"' : '';
		printf( '<a%s href="%s">%s</a>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
		if ( ! in_array( 2, $links ) )
			echo ' … ';
	}

	sort( $links );
	foreach ( (array) $links as $link ) {
		$class = $paged == $link ? ' class="active"' : '';
		printf( '<a%s href="%s">%s</a>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
	}

	if ( ! in_array( $max, $links ) ) {
		if ( ! in_array( $max - 1, $links ) )
			echo ' … ' . "\n";
		$class = $paged == $max ? ' class="active"' : '';
		printf( '<a%s href="%s">%s</a>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
	}

}

add_action('do_meta_boxes', 'slidebox');

function slidebox(){
    $sheight = get_option('sheight');
			if ( ! $sheight ) {
			$sheight = 500;
	    	}
	$swidth = get_option('swidth');
			if ( ! $swidth ) {
			$swidth = 1200;
	    	}
    remove_meta_box( 'postimagediv', 'slider', 'side' );
    add_meta_box('postimagediv', __('Upload gambar untuk slide berukuran '.$swidth.' x '.$sheight.' pixel'), 'post_thumbnail_meta_box', 'slider', 'normal', 'high');
    remove_meta_box( 'postimagediv', 'dokter', 'side' );
    add_meta_box('postimagediv', __('Photo Dokter, 300x400 px'), 'post_thumbnail_meta_box', 'dokter', 'side', 'low');
	remove_meta_box( 'postimagediv', 'perawat', 'side' );
    add_meta_box('postimagediv', __('Photo Perawat, 300x400 px'), 'post_thumbnail_meta_box', 'perawat', 'side', 'low');
}

// change size of admin featured image size in edit screen 
function dealer_thumbnail( $full, $id, $size ) {
    if ( ! is_admin() || ! get_current_screen() || 'slider' !==   get_current_screen()->post_type ) {
        return $full;
    }
	
	remove_filter( 'image_downsize', __FUNCTION__, 10, 3 );
	// settings can be thumbnail, medium, large, full 
	$image = image_downsize( $id, 'slider' ); 
	
	add_filter( 'image_downsize', __FUNCTION__, 10, 3 );
	
	return $image;
}
add_filter( 'image_downsize', 'dealer_thumbnail', 10, 3 );

?>