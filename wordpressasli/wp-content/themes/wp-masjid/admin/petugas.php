<?php 

// petugas masjid pengaturan WP Masjid

?>

    <tr valign="top">
    	<td class="tl"><label for="nama"><?php _e('JADWAL SHALAT', 'wp-masjid'); ?></label></td>
		<td colspan="2">Tema WP Masjid menggunakan source muslimpro.com untuk menampilkan Jadwal Shalat otomatis berdasarkan kota. Silahkan cari ID dari lokasi Kota Anda, atau setidaknya Kota terdekat diwilayah Anda untuk ditampilkan jadwal shalatnya. Dapatkan <a href="https://ciuss.com/idkota" target="_blank">ID Kota</a></td>
	</tr>
	
	<tr valign="top">
    	<td class="tl"><label for="nama"><?php _e('ID KOTA', 'wp-masjid'); ?></label></td>
		<td>
	    	<input type="text" name="IDkota" id="IDkota" class="widefat" value="<?php echo get_option('IDkota'); ?>" />
    	</td>
		<td>
	    	Masukan angka ID misal <strong>1633070</strong>
    	</td>
	</tr>
	
	
	<tr valign="top">
    	<td class="tl"><label for="nama"><?php _e('PETUGAS', 'wp-masjid'); ?></label></td>
		<td colspan="2">Masukkan daftar petugas yang menjadi Imam dan Muadzin untuk Shalat 5 waktu</td>
	</tr>

	<tr valign="top">
    	<td class="tl"><label for="nama"><?php _e('SHALAT', 'wp-masjid'); ?></label></td>
		<td><label for="nama"><?php _e('IMAM', 'wp-masjid'); ?></label></td>
		<td><label for="nama"><?php _e('MUADZIN', 'wp-masjid'); ?></label></td>
	</tr>

	<tr valign="top">
    	<td class="tl"><label for="subuh"><?php _e('SUBUH', 'wp-masjid'); ?></label></td>
		<td>
	    	<input type="text" name="imam-subuh" id="imam-subuh" class="widefat" value="<?php echo get_option('imam-subuh'); ?>"/>
    	</td>
		<td>
	    	<input type="text" name="muadzin-subuh" id="muadzin-subuh" class="widefat" value="<?php echo get_option('muadzin-subuh'); ?>"/>
    	</td>
	</tr>
	
	<tr valign="top">
    	<td class="tl"><label for="dzuhur"><?php _e('DZUHUR', 'wp-masjid'); ?></label></td>
		<td>
	    	<input type="text" name="imam-dzuhur" id="imam-dzuhur" class="widefat" value="<?php echo get_option('imam-dzuhur'); ?>"/>
    	</td>
		<td>
	    	<input type="text" name="muadzin-dzuhur" id="muadzin-dzuhur" class="widefat" value="<?php echo get_option('muadzin-dzuhur'); ?>"/>
    	</td>
	</tr>
	
	<tr valign="top">
    	<td class="tl"><label for="ashar"><?php _e('ASHAR', 'wp-masjid'); ?></label></td>
		<td>
	    	<input type="text" name="imam-ashar" id="imam-ashar" class="widefat" value="<?php echo get_option('imam-ashar'); ?>"/>
    	</td>
		<td>
	    	<input type="text" name="muadzin-ashar" id="muadzin-ashar" class="widefat" value="<?php echo get_option('muadzin-ashar'); ?>"/>
    	</td>
	</tr>
	
	<tr valign="top">
    	<td class="tl"><label for="maghrib"><?php _e('MAGHRIB', 'wp-masjid'); ?></label></td>
		<td>
	    	<input type="text" name="imam-maghrib" id="imam-maghrib" class="widefat" value="<?php echo get_option('imam-maghrib'); ?>"/>
    	</td>
		<td>
	    	<input type="text" name="muadzin-maghrib" id="muadzin-maghrib" class="widefat" value="<?php echo get_option('muadzin-maghrib'); ?>"/>
    	</td>
	</tr>
	
	<tr valign="top">
    	<td class="tl"><label for="isya"><?php _e('ISYA', 'wp-masjid'); ?></label></td>
		<td>
	    	<input type="text" name="imam-isya" id="imam-isya" class="widefat" value="<?php echo get_option('imam-isya'); ?>"/>
    	</td>
		<td>
	    	<input type="text" name="muadzin-isya" id="muadzin-isya" class="widefat" value="<?php echo get_option('muadzin-isya'); ?>"/>
    	</td>
	</tr>
