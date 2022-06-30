<?php

require_once('functions/theme-post-type.php');
require_once('functions/theme-post-title.php');
require_once('functions/theme-time-left.php');
require_once('functions/theme-breadcrumb.php');
require_once('functions/theme-setup.php');
require_once('functions/theme-script.php');
require_once('functions/theme-option.php');
require_once('functions/theme-sidebar.php');
require_once('functions/theme-excerpt.php');
require_once('functions/theme-comment.php');
require_once('functions/theme-ciuss-news.php');
require_once('functions/theme-update.php');
 
 
if (!isset($content_width)) {
	$content_width = 610;
}

function return_300( $seconds ) {
  return 300;
}
add_filter( 'wp_feed_cache_transient_lifetime' , 'return_300' );
