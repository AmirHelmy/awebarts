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
		<div class="contents logincont">
			<div class="register">
				<form action="controllers/c_logincontroller.php" method="post">
					<h1>Register new user:</h1>
					<input name="name" 		type="text" 	required="required" class="input-lg" placeholder="Write Your Full Name" />
					<input name="email" 	type="email"  	required="required" class="input-lg" placeholder="Enter Your E-mail"/>
					<input name="username" 	type="text" 	required="required" class="input-lg" placeholder="Enter Your UserName" />
					<input name="password" 	type="password" required="required" class="input-lg" />
					<input name="submit" 	type="submit" 	value="Register" 	class="btn-primary btn-lg"	/>
				</form>
			</div>
			<div class="login">
				<form action="controllers/c_logincontroller.php" method="post">
					<h1>Login:</h1>
					<input required="required" name = "name" class="input-lg" type="text" placeholder="Enter Your UserName" />
					<input required="required" name = "password" class="input-lg" type="password" />
					<input class="btn-primary btn-lg" type="submit" name="submit" value="Login" />
				</form>
			</div>
		</div>
	</div>
</body>
</html>