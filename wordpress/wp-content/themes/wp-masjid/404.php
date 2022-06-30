<?php get_header(); ?>

    	<div class="container">
            <div class="notfound">
		        	<h1>
			        	<?php echo (get_option('pesan404')) ? get_option(stripslashes('pesan404')).'' : 'Error 404, Tidak Tersedia' ?>
		        	</h1>
			    	Halaman yang Anda tuju tidak tersedia, telah di hapus atau mungkin tautan telah kadaluarsa
				</div>
    	</div>

<?php get_footer(); ?>
