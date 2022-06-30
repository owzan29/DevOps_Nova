<?php
/**
 * Pagination tema WP Masjid
 * Author : yayun
 * Facebook : http://facebook.com/ciussgw
 * Whatsapp : 0815-3274-4804
 */
?>

<div class="clear">
	<div class="pagination">
		<?php previous_posts_link(__('<span class="text"> < Baru</span>', 'wpmasjid')); ?>
		<?php wpbeginner_numeric_posts_nav(); ?>
		<?php next_posts_link(__('<span class="text">Lama > </span>', 'wpmasjid')); ?>
	</div>
</div>