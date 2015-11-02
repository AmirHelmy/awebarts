<?php
	session_start();
		if(!isset($_SESSION['username'])){
			include 'views/login.php';
			die();
		}
	//session_destroy();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charest="utf-8" />
		<title>awebarts</title>
		<link rel="stylesheet" href="resourses/css/bootstrap.min.css" type="text/css" />
		<link rel="stylesheet" href="resourses/css/bootstrap.css" type="text/css" />
		<link rel="stylesheet" href="resourses/css/style.css" type="text/css" />
		<script src="resourses/js/bootstrap.min.js"></script>
		<script src="resourses/js/bootstrap.js"></script>
	</head>
<body>
	<div class="container">
		<header>
			<img src="resourses/images/logo.png" alt="logo" />
			<h2>Welcome 
			<?php
			if(isset($_SESSION['username'])){
				echo $_SESSION['username']. ' [' .'<a href="?page=logout">Log Out</a>'.']';
			}
			?>
			</h2>
		</header>
		<div class="clear"></div>
			<div class="contents">
				<aside>
					<nav>
						<a class="btn-danger active" href="index.php">Home Page</a>
						<a class="btn-danger" href="?page=mainsettings">Main settings</a>
						<a class="btn-danger" href="?page=sections">Sections</a>
						<a class="btn-danger" href="?page=pages">Pages</a>
						<a class="btn-danger" href="?page=comments">Comments</a>
						<a class="btn-danger" href="?page=library">Liberary</a>
					</nav>
				</aside>
				<section id="page">
					<?php
						if(@$_GET['page']){
							$url ='controllers/C_'. $_GET['page'].'.php';
							if(is_file($url)){
								include $url;
							}else{
								echo 'requsted file is not found';
							}
						}else{
							include './main.php';
						}
					?>
				</section>
			</div>
		<div class="clear"></div>
		<footer>
			<p>Copyright Recerved - Amir Helmy - 2015</p>
		</footer>
	</div>
</body>
</html>