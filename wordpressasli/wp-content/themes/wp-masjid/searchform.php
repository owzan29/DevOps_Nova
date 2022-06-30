<div class="search-post">
	<form method="get" id="searchform" action="<?php bloginfo('url'); ?>">
		<fieldset>
		    <input class="spo" name="s" type="text" placeholder="<?php echo (get_option('recaber')) ? get_option('recaber').'' : 'cari berita' ?>..." value=""/>
			<input type="hidden" name="post_type" value="post" />
			<button type="submit" style="display:none"><i class="fa fa-search"></i></button>
		</fieldset>
	</form>
</div>
