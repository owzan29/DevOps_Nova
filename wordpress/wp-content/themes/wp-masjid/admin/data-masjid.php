<?php 

// Data masjid pengaturan WP Masjid

?>

    <tr valign="top">
    	<td class="tl"><label for="nama"><?php _e('Data Masjid', 'wp-masjid'); ?></label></td>
		<td>
	    	Silahkan dilengkapi data seputar masjid dengan mengisi kolom-kolom yang ada di bawah ini
    	</td>
	</tr>
	
	<tr valign="top">
    	<td class="tl"><label for="nama"><?php _e('Nama Masjid', 'wp-masjid'); ?></label></td>
		<td>
	    	<input type="text" placeholder="Masjid..." name="nama" id="nama" class="widefat" value="<?php echo get_option('nama'); ?>"/>
    	</td>
	</tr>
	
	<tr valign="top">
    	<td class="tl"><label for="luastanah"><?php _e('Luas Tanah', 'wp-masjid'); ?></label></td>
		<td>
	    	<input type="text" placeholder="misal 1000 m2..." name="luastanah" id="luastanah" class="widefat" value="<?php echo get_option('luastanah'); ?>"/>
		</td>
	</tr>
	
	<tr valign="top">
    	<td class="tl"><label for="luasbang"><?php _e('Luas Bangunan', 'wp-masjid'); ?></label></td>
		<td>
	    	<input type="text" placeholder="misal 400 m2..." name="luasbang" id="luasbang" class="widefat" value="<?php echo get_option('luasbang'); ?>"/>
    	</td>
	</tr>
	
	<tr valign="top">
    	<td class="tl"><label for="status"><?php _e('Status Tanah', 'wp-masjid'); ?></label></td>
		<td>
	    	<input type="text" placeholder="status..." name="status" id="status" class="widefat" value="<?php echo get_option('status'); ?>"/>
		</td>
	</tr>
	
	<tr valign="top">
    	<td class="tl"><label for="tahun"><?php _e('Tahun Berdiri', 'wp-masjid'); ?></label></td>
		<td>
	    	<input type="text" placeholder="tahun..." name="tahun" id="tahun" class="widefat" value="<?php echo get_option('tahun'); ?>"/>
		</td>
	</tr>
	
	<tr valign="top"> 
		<td class="tl"><label for="alamat"><?php _e('Alamat', 'wp-masjid'); ?></label></td>
	    <td>
		    <input type="text" placeholder="Jl..." name="alamat" id="alamat" class="widefat" value="<?php echo get_option('alamat'); ?>"/>
		</td>
	</tr>
	
	<tr valign="top">
     	<td class="tl"><label for="kelurahan"><?php _e('Desa / Kelurahan', 'wp-masjid'); ?></label></td>
		<td>
	    	<input type="text" placeholder="Kel..." name="kelurahan" id="kelurahan" class="widefat" value="<?php echo get_option('kelurahan'); ?>"/>
		</td>
	</tr>
	
	<tr valign="top">
     	<td class="tl"><label for="kecamatan"><?php _e('Kecamatan', 'wp-masjid'); ?></label></td>
		<td>
	    	<input type="text" placeholder="Kec..." name="kecamatan" id="kecamatan" class="widefat" value="<?php echo get_option('kecamatan'); ?>"/>
		</td>
	</tr>
	
	<tr valign="top">
    	<td class="tl"><label for="kabupaten"><?php _e('Kabupaten', 'wp-masjid'); ?></label></td>
		<td>
	    	<input type="text" placeholder="Kab..." name="kabupaten" id="kabupaten" class="widefat" value="<?php echo get_option('kabupaten'); ?>"/>
		</td>
	</tr>
	
	<tr valign="top">
    	<td class="tl"><label for="provinsi"><?php _e('Provinsi', 'wp-masjid'); ?></label></td>
		<td>
	    	<input type="text" placeholder="Prov..." name="provinsi" id="provinsi" class="widefat" value="<?php echo get_option('provinsi'); ?>"/>
    	</td>
	</tr>
	
	<tr valign="top">
    	<td class="tl"><label for="kodepos"><?php _e('Kode Pos', 'wp-masjid'); ?></label></td>
	    	<td><input type="text" placeholder="Kode pos..." name="kodepos" id="kodepos" class="widefat" value="<?php echo get_option('kodepos'); ?>"/>
		</td>
	</tr>
	
	<tr valign="top">
    	<td class="tl"><label for="embedmaps"><?php _e('Embed Maps', 'wp-masjid'); ?></label></td>
		<td>
	    	<textarea name="embedmaps" id="embedmaps" class="widefat"><?php echo get_option('embedmaps'); ?></textarea>
			<span class="description">Gunakan embed maps jika Anda tidak memiliki API Key maps, cek caranya di <a target="_blank" href="https://www.youtube.com/watch?v=4mgBLVta0jA">https://www.youtube.com/watch?v=4mgBLVta0jA</a></span>
    	</td>
	</tr>
	
	<tr valign="top">
    	<td class="tl"><label for="maps"><?php _e('Koordinat', 'wp-masjid'); ?></label></td>
		<td>
	    	<input type="text" placeholder="misal -5.932330, 105.992419..." name="maps" id="maps" class="widefat" value="<?php echo get_option('maps'); ?>"/>
		</td>
	</tr>
	
	<tr valign="top">
    	<td class="tl"><label for="apikey"><?php _e('API Key Maps', 'wp-masjid'); ?></label></td>
		<td>
	    	<input type="text" placeholder="API key..." name="apikey" id="apikey" class="widefat" value="<?php echo get_option('apikey'); ?>"/>
			<span class="description">PENTING : API Key berbayar bisa dibuat di <a href="https://developers.google.com/maps/documentation/javascript/get-api-key" target="_blank">Google Dev</a></span>
    	</td>
	</tr>
	
	<tr valign="top">
    	<td class="tl"><label for="telepon"><?php _e('Telepon', 'wp-masjid'); ?></label></td>
		<td>
	    	<input type="text" placeholder="misal 83815251385..." name="telepon" id="telepon" class="widefat" value="<?php echo get_option('telepon'); ?>"/>
		</td>
	</tr>
	
	<tr valign="top">
    	<td class="tl"><label for="fax"><?php _e('Fax', 'wp-masjid'); ?></label></td>
		<td>
	    	<input type="text" placeholder="misal 0723-4760077..." name="fax" id="fax" class="widefat" value="<?php echo get_option('fax'); ?>"/>
		</td>
	</tr>
	
	<tr valign="top"> 
    	<td class="tl"><label for="email"><?php _e('Email', 'wp-masjid'); ?></label></td>
		<td>
	    	<input type="text" placeholder="misal yayun@ciuss.com..." name="email" id="email" class="widefat" value="<?php echo get_option('email'); ?>"/>
		</td>
	</tr>
	
	<tr valign="top"> 
		<td class="tl"><label for="facebook"><?php _e('Facebook', 'wp-masjid'); ?></label></td>
		<td>
	    	<input type="text" placeholder="http://..." name="facebook" id="facebook" class="widefat" value="<?php echo get_option('facebook'); ?>"/>
		</td>
	</tr>
	
	<tr valign="top">
    	<td class="tl"><label for="twitter"><?php _e('Twitter', 'wp-masjid'); ?></label></td>
		<td>
	    	<input type="text" placeholder="http://..." name="twitter" id="twitter" class="widefat" value="<?php echo get_option('twitter'); ?>"/>
		</td>
	</tr>
	
 	<tr valign="top"> 
    	<td class="tl"><label for="google"><?php _e('Instagram', 'wp-masjid'); ?></label></td>
		<td>
	    	<input type="text" placeholder="http://..." name="instagram" id="instagram" class="widefat" value="<?php echo get_option('instagram'); ?>"/>
    	</td>
	</tr>
	
	<tr valign="top">
    	<td class="tl"><label for="youtube"><?php _e('Youtube', 'wp-masjid'); ?></label></td>
		<td>
	    	<input type="text" placeholder="http://..." name="youtube" id="youtube" class="widefat" value="<?php echo get_option('youtube'); ?>"/>
		</td>
	</tr>
	
	<tr valign="top"> 
    	<td class="tl"><label for="google"><?php _e('Rekening 1', 'wp-masjid'); ?></label></td>
		<td class="rek">
	    	<input type="text" placeholder="bank..." name="bank1" id="bank1" class="widefat" value="<?php echo get_option('bank1'); ?>"/>
			<input type="text" placeholder="kode bank..." name="kode1" id="kode1" class="widefat" value="<?php echo get_option('kode1'); ?>"/>
			<input type="text" placeholder="no rekening..." name="rek1" id="rek1" class="widefat" value="<?php echo get_option('rek1'); ?>"/>
			<input type="text" placeholder="atas nama..." name="atas1" id="atas1" class="widefat" value="<?php echo get_option('atas1'); ?>"/>
    	</td>
	</tr>
	
	<tr valign="top"> 
    	<td class="tl"><label for="google"><?php _e('Rekening 2', 'wp-masjid'); ?></label></td>
		<td class="rek">
	    	<input type="text" placeholder="bank..." name="bank2" id="bank2" class="widefat" value="<?php echo get_option('bank2'); ?>"/>
			<input type="text" placeholder="kode bank..." name="kode2" id="kode2" class="widefat" value="<?php echo get_option('kode2'); ?>"/>
			<input type="text" placeholder="no rekening..." name="rek2" id="rek2" class="widefat" value="<?php echo get_option('rek2'); ?>"/>
			<input type="text" placeholder="atas nama..." name="atas2" id="atas2" class="widefat" value="<?php echo get_option('atas2'); ?>"/>
    	</td>
	</tr>
	
	<tr valign="top"> 
    	<td class="tl"><label for="google"><?php _e('Rekening 3', 'wp-masjid'); ?></label></td>
		<td class="rek">
	    	<input type="text" placeholder="bank..." name="bank3" id="bank3" class="widefat" value="<?php echo get_option('bank3'); ?>"/>
			<input type="text" placeholder="kode bank..." name="kode3" id="kode3" class="widefat" value="<?php echo get_option('kode3'); ?>"/>
			<input type="text" placeholder="no rekening..." name="rek3" id="rek3" class="widefat" value="<?php echo get_option('rek3'); ?>"/>
			<input type="text" placeholder="atas nama..." name="atas3" id="atas3" class="widefat" value="<?php echo get_option('atas3'); ?>"/>
    	</td>
	</tr>
	
	<tr valign="top"> 
    	<td class="tl"><label for="google"><?php _e('Rekening 4', 'wp-masjid'); ?></label></td>
		<td class="rek">
	    	<input type="text" placeholder="bank..." name="bank4" id="bank4" class="widefat" value="<?php echo get_option('bank4'); ?>"/>
			<input type="text" placeholder="kode bank..." name="kode4" id="kode4" class="widefat" value="<?php echo get_option('kode4'); ?>"/>
			<input type="text" placeholder="no rekening..." name="rek4" id="rek4" class="widefat" value="<?php echo get_option('rek4'); ?>"/>
			<input type="text" placeholder="atas nama..." name="atas4" id="atas4" class="widefat" value="<?php echo get_option('atas4'); ?>"/>
    	</td>
	</tr>
	
	