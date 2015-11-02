<form class="mainSettingsForm" action="" method="post">
<!--`site_name`, `site_url`, `site_desc`, `site_email`, `site_tags`, `site_homepanel`, `fb`, `tw`, `yt`, `rss`, `user_name` -->
	<label for="site_name">Site name</label>
	<input id="site_name" type="text" name="site_name" value="" />
	
	<label for="site_url">Site URL</label>
	<input id="site_url" type="text" name="site_url" value="" />
	
	<label for="site_desc">Site descerption</label>
	<textarea id="site_desc" name="site_desc"></textarea>
	
	<label for="site_email">Site E-mail</label>
	<input id="site_email" type="email" name="site_email" value="" />
	
	<label for="site_tags">Site tags</label>
	<textarea id="site_tags" name="site_tags"></textarea>
	
	<label for="site_homepanel">Site Homepanel</label>
	<textarea id="site_homepanel" name="site_homepanel"></textarea>
	
	<label for="fb">Facebook</label>
	<input id="fb" type="text" name="fb" value="" />
	
	<label for="tw">Twitter</label>
	<input id="tw" type="text" name="tw" value="" />
	
	<label for="yt">YouTube</label>
	<input id="yt" type="text" name="yt" value="" />
	
	<label for="rss">RSS</label>
	<input id="rss" type="text" name="rss" value="" />
	
	<input type="hidden" name="user_name" value="<?php echo $_SESSION['username'];?>" />
	<input class="btn-lg btn-primary" type="submit" name="submit" value="Update" />
</form>