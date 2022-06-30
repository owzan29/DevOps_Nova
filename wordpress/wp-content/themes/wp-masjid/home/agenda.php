    <!-- Agenda --> 
	<div class="gg clear">
	    <div class="masag">
		    <div class="outag">
		        <h3><span><?php echo (get_option('berita')) ? get_option('berita') : 'PETUGAS JUMAT' ?></span></h3>
	    	    <?php 
					    $friday = strtotime(date('d-m-Y'));
						query_posts( array( 
					    'post_type' => 'jadwal-jumat', 
						'posts_per_page' => 1, 
						'meta_key' => '_jminus',
						'meta_query' => array(
					    	array(
						    	'key' => '_jminus',
								'value' => $friday,
								'compare' => '>='
								)
							),
						'orderby' => 'meta_value',
						'order' => 'ASC'
						) 
				); ?>
				<?php if (have_posts()) { ?>
					<div class="homejumat clear">
					    <?php while (have_posts()): the_post(); ?>
						    <?php
							    global $post;
						     	$jevents = get_post_meta($post->ID, '_jevents', true);
								$jminus = strtotime(get_post_meta($post->ID, '_jevents', true));
								$jjam = get_post_meta($post->ID, '_jjam', true);
								$jtoday = strtotime(date_i18n('d-m-Y H:i'));
								$jend = get_post_meta($post->ID, '_jevent', true).' '.get_post_meta($post->ID, '_jjam', true);
								$jexp = strtotime(date_i18n($jend));
								$jsisa = $jexp-$jtoday;
							?>
							<div class="jumtop">
							    <strong><?php echo date_i18n("j F Y", strtotime($jevents)); ?> - <?php echo get_post_meta($post->ID, '_jjam', true); ?></strong>
							</div>
							<table class="jumm">
								<tr>
									<td><strong>IMAM</strong></td>
									<td class="jumr"><?php echo get_post_meta($post->ID, '_jimam', true); ?></td>
							    </tr>
								<tr>
									<td><strong>KHATIB</strong></td>
									<td class="jumr"><?php echo get_post_meta($post->ID, '_jkhatib', true); ?></td>
								</tr>
								<tr>
									<td><strong>MUADZIN</strong></td>
									<td class="jumr"><?php echo get_post_meta($post->ID, '_jmuadzin', true); ?></td>
								</tr>
								
								<tr>
									<td><strong>BILAL</strong></td>
									<td class="jumr"><?php echo get_post_meta($post->ID, '_jbilal', true); ?></td>
								</tr>
							</table>
				    	<?php endwhile; ?>
					</div>
				<?php } else { ?>				
			    	<div class="ndeleft"><span class="noagen">Belum ada Jadwal</span></div>					
				<?php } ?>
			    <?php wp_reset_query(); ?>
		    </div>
	    </div>
	    <div class="masgen">
		    <div class="genin">
			    <?php 
					    $today = strtotime(date('d-m-Y'));
						query_posts( array( 
					    'post_type' => 'event', 
						'posts_per_page' => 1, 
						'meta_key' => '_minus',
						'meta_query' => array(
					    	array(
						    	'key' => '_minus',
								'value' => $today,
								'compare' => '>='
								)
							),
						'orderby' => 'meta_value',
						'order' => 'ASC'
						) 
				); ?>
				    <?php if (have_posts()) { ?>
					    <?php while (have_posts()): the_post(); ?>
						    <?php
							    global $post;
						     	$tevent = get_post_meta($post->ID, '_tevent', true);
								$minus = strtotime(get_post_meta($post->ID, '_tevent', true));
								$jam = get_post_meta($post->ID, '_jam', true);
								$today = strtotime(date_i18n('d-m-Y H:i'));
								$end = get_post_meta($post->ID, '_tevent', true).' '.get_post_meta($post->ID, '_jam', true);
								$exp = strtotime(date_i18n($end));
								$sisa = $exp-$today;
							?>
							<div class="homgen clear">
							    <!-- first post -->
						    	<div class="agenda-info">
								    <div class="floatag">
									    <span>AGENDA : <em><?php echo date_i18n("j F Y", strtotime($tevent)); ?> - <?php echo get_post_meta($post->ID, '_jam', true); ?></em></span>
								        <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
									</div>
								    <div class="imagenda">
							            <?php if (has_post_thumbnail()) { ?>
						        		<a href="<?php the_permalink() ?>">
										    <?php the_post_thumbnail('medthumb', array(
							        		'alt' => trim(strip_tags($post->post_title)),
									    	'title' => trim(strip_tags($post->post_title)),
									    	)); 
											?>
								    	</a>
							    	    <?php } else { ?>
							    		<a href="<?php the_permalink() ?>" class="thumb">
							    	    	<img src="<?php echo get_template_directory_uri(); ?>/images/default.png"/>
							    		</a>
									    <?php } ?>
									    <div class="imaover"></div>
									</div>
								</div>
							    <div class="meta-info">
									<div id="clockdiv">
									<?php if ( $sisa > 0 ) { ?>
							     		<div class="days"></div> <div class="hours"></div><div class="dots">:</div><div class="minutes"></div><div class="seconds"></div>
									<?php } ?>
									</div>
									<a class="showag" href="<?php the_permalink() ?>">LIHAT AGENDA</a>
						    	</div>
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
var deadline = '<?php echo date("F j Y", strtotime($tevent)); ?> <?php echo get_post_meta($post->ID, '_jam', true); ?> UTC+0700';
initializeClock('clockdiv', deadline);
</script>	
				    	<?php endwhile; ?>						
				<?php } else { ?>
				            <div class="homgen clear">
							    <!-- first post -->
						    	<div class="agenda-info">
								    <div class="floatag">
									    <h3><a href="#">BELUM ADA AGENDA</a></h3>
									</div>
								    <div class="imagenda">
							    	    <img src="<?php echo get_template_directory_uri(); ?>/images/default.png"/>
									    <div class="imaover"></div>
									</div>
								</div>
							    <div class="meta-info">
						    	</div>
							</div>
				<?php } ?>
			<?php wp_reset_query(); ?>
			</div>
		</div>
	    <div class="peng">
		    <div class="pengin">
			    <div class="peinner">
	    	        <h3><span><?php echo (get_option('berita')) ? get_option('berita') : 'PENGUMUMAN' ?></span></h3>
					<?php query_posts('post_type=pengumuman&showposts=1'); ?>
					    <?php if (have_posts()) { ?>
						    <?php while (have_posts()): the_post(); ?>
						        <div class="inpen">
						        	<?php printf(__('<i class="far fa-clock"></i> %s', 'wpmasjid'),get_the_time('l, j M Y')); ?>
							        <h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
									<?php if (function_exists('smart_excerpt')) smart_excerpt(get_the_excerpt(), 20); ?>
							    </div>
					        <?php endwhile; ?>
				        <?php } ?>
			        <?php wp_reset_query(); ?>
			    </div>
			</div>
		</div>
	</div>