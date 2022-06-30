<?php

/*
 * Menambahkan RSS ciuss dashboard
 *
 */
 
    function wpc_dashboard_widgets() {
    	global $wp_meta_boxes;
	    	unset(
		    	$wp_meta_boxes['dashboard']['side']['core']['dashboard_plugins'],
				$wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary'],
				$wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']
				);
				
				add_meta_box( 'id', 'Berita dari <em>Ciuss.Com</em>', 'dashboard_custom_feed_output', 'dashboard', 'normal', 'high' );
		}
			
	function dashboard_custom_feed_output() {
		wp_enqueue_style('admin-css', get_template_directory_uri() . '/css/admin-css.css'); 
	    echo '<div class="rss-widget">
            <div class="rssimg">
		        <a href="https://ciuss.com/news/" target="_blank">
			    	<img src="https://ciuss.com/wp-content/themes/ciuss/images/ciuss.jpg"/>
				</a>
			</div>';
				
				wp_widget_rss_output(array(
				'url' => 'http://ciuss.com/feed',
				'items' => 1,
				'show_summary' => 1,
				'show_author' => 0,
				'show_date' => 1)
				);
				
				echo '<div class="rssfoot">
				    Groups Diskusi <a target="_blank" href="https://facebook.com/groups/wp.masjid/">Facebook</a> | Rekomendasi <a target="_blank" href="https://ciuss.com/hostingmurah">Hosting Murah Berkualitas</a>
				</div>
			</div>';
		}
		
	add_action('wp_dashboard_setup', 'wpc_dashboard_widgets');

?>