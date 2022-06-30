<?php get_header(); ?>

	<?php if (function_exists('dimox_breadcrumbs')) { ?>
        <?php dimox_breadcrumbs(); ?>
    <?php } ?>

<section class="wecontent clear">
	
    <div class="mas-nav clear">
	
    	<div class="weleft">
        	<?php if (have_posts()): ?>
	        	<?php while (have_posts()): the_post(); ?>
				<?php
					global $post;
					$tanggal = get_post_meta($post->ID, '_tevent', true);
					$jam = get_post_meta($post->ID, '_jam', true);
					$today = strtotime(date_i18n('d-m-Y H:i'));
					$end = get_post_meta($post->ID, '_tevent', true).' '.get_post_meta($post->ID, '_jam', true);
					$exp = strtotime(date_i18n($end));
					$sisa = $exp-$today;
				?>

				<!-- left side -->

				<div class="blog-content clear">
				    <h2>Agenda : <?php the_title(); ?></h2>
					<div class="agd">
						<div class="acar">
						        <table>
				                	<tr>
						        		<td><strong>WAKTU</strong></td>
							    		<td>:</td>
					           	     	<td><?php echo date_i18n("l", strtotime($tanggal)); ?>, <?php echo date_i18n("H:i", strtotime($jam)); ?> - <?php echo date_i18n("j F Y", strtotime($tanggal)); ?></td>
						    		</tr>
						        	<tr>
							    	    <td><strong>LOKASI</strong></td>
						    			<td>:</td>
						    			<td><?php echo get_post_meta($post->ID, '_lokasi', true); ?></td>
						    		</tr>
						    		<tr>
						    		    <td><strong>INFO ACARA</strong></td>
						    			<td>:</td>
						    			<td><?php echo get_post_meta($post->ID, '_koordinator', true); ?> / <?php echo get_post_meta($post->ID, '_telepon', true); ?></td>
					    			</tr>
					    	    </table>
						</div>
						<div id="clockdiv">
						    <?php if ( $sisa > 0 ) { ?>
							    <span>Waktu Menuju Acara</span>
							    <div class="days"></div> <div class="hours"></div><div class="dots">:</div><div class="minutes"></div><div class="seconds"></div>
                            <?php } else { ?>
							     <br/><span class="inred">Agenda Ini Sudah Lewat / Kadaluarsa</span>
							<?php } ?>
					    </div>
					</div>
					<?php if (has_post_thumbnail()) echo '<div class="sthumb">'.get_the_post_thumbnail($post->ID, 'full',
    				    	array(
				    		'alt' => trim(strip_tags($post->post_title)),
				    		'title' => trim(strip_tags($post->post_title)),
			    		)).'</div>'; ?>
						
				    <?php the_content(); ?>
				</div>
				
				<div class="post-navigation clear">
				    <?php
					$prev_post = get_adjacent_post(false, '', true);
					$next_post = get_adjacent_post(false, '', false); ?>
					<?php if ($prev_post): $prev_post_url = get_permalink($prev_post->ID); $prev_post_title = $prev_post->post_title; ?>
						<a class="post-prev" href="<?php echo $prev_post_url; ?>"><em><?php _e('Sebelumnya', 'wpmasjid'); ?></em><span><?php echo $prev_post_title; ?></span></a>
					<?php endif; ?>
					<?php if ($next_post): $next_post_url = get_permalink($next_post->ID); $next_post_title = $next_post->post_title; ?>
						<a class="post-next" href="<?php echo $next_post_url; ?>"><em><?php _e('Sesudahnya', 'wpmasjid'); ?></em><span><?php echo $next_post_title; ?></span></a>
					<?php endif; ?>
			    </div>
			
			    <?php endwhile; ?>
        	<?php endif; ?>
	  	
    	</div>
		
<script>

function getTimeRemaining(endtime){
  var t = Date.parse(endtime) - Date.parse(new Date());
  var seconds = Math.floor( (t/1000) % 60 );
  var minutes = Math.floor( (t/1000/60) % 60 );
  var hours = Math.floor( (t/(1000*60*60)) % 24 );
  var days = Math.floor( t/(1000*60*60*24) );
  return {
    'total': t,
    'days': days,
    'hours': hours,
    'minutes': minutes,
    'seconds': seconds
  };
}

function initializeClock(id, endtime){
  var clock = document.getElementById(id);
  var daysSpan = clock.querySelector('.days');
  var hoursSpan = clock.querySelector('.hours');
  var minutesSpan = clock.querySelector('.minutes');
  var secondsSpan = clock.querySelector('.seconds');

  function updateClock(){
    var t = getTimeRemaining(endtime);

    daysSpan.innerHTML = t.days;
    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

    if(t.total<=0){
      clearInterval(timeinterval);
    }
  }

  updateClock();
  var timeinterval = setInterval(updateClock,1000);
}

var deadline = '<?php echo date("F j Y", strtotime($tanggal)); ?> <?php echo get_post_meta($post->ID, '_jam', true); ?> UTC+0700';
initializeClock('clockdiv', deadline);

</script>


	
		<!-- right content -->
    	<div class="weright">
    		
			<?php get_sidebar(); ?>
		
		</div>
	    <!-- right content -->


	</div>
</section>
	
<?php get_footer(); ?>
