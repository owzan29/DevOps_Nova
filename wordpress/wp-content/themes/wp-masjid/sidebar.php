    		<div id="sidebar">
	    		<?php if (dynamic_sidebar('Sidebar')) {
	    			$widget_args = array(
        				'before_widget' => '<div id="%1$s" class="%2$s widget">',
	    				'after_widget' => '</div>',
	    				'before_title' => '<h3>',
	    				'after_title' => '</h3>'
	    			);
	    		?>	
	    		<?php } else { ?>
	
	    		<div id="recentposts_thumbnail-3" class="widget_recentposts_thumbnail widget clear">
        		    <label>
	    			Silahkan tambahkan Widget untuk ditampilkan di bagian ini. Login dan tambahkan Widget di Dasbor > Tampilan > Widget
	    			</label>
	    		</div>
	
	    		<?php } ?>
    		</div>
