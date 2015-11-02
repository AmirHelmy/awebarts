<h3>Main Settings</h3>

<?php
	if(isset($_POST['submit']) && $_POST['submit'] == "Update"){
		//`site_name`, `site_url`, `site_desc`, `site_email`, `site_tags`, `site_homepanel`, `fb`, `tw`, `yt`, `rss`, `user_name`
		$mainSettinsData['site_name']  	= $_POST['site_name'];
		$mainSettinsData['site_url'] 		= $_POST['site_url'];
		$mainSettinsData['site_desc'] 		= $_POST['site_desc'];
		$mainSettinsData['site_email'] 	= $_POST['site_email'];
		$mainSettinsData['site_tags'] 		= $_POST['site_tags'];
		$mainSettinsData['site_homepanel'] = $_POST['site_homepanel'];
		$mainSettinsData['fb'] 			= $_POST['fb'];
		$mainSettinsData['tw'] 			= $_POST['tw'];
		$mainSettinsData['yt'] 			= $_POST['yt'];
		$mainSettinsData['rss'] 			= $_POST['rss'];
		$mainSettinsData['user_name']		= $_POST['user_name'];
		$tableName = 'main_settings';
		try{
			include './models/awebarts.php';
			include './models/add.php';
			$add = new add($mainSettinsData, $tableName);
			if($add){
				echo 'added';
			}
		}catch (Exception $exc){
			echo $exc->getMessage();
		}
		
	}else{
		include 'views/v_mainSettings.php';
	}
?>