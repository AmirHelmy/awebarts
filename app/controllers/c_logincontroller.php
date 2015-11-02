<?php

if ($_POST){
	if(isset($_POST['submit']) && $_POST['submit'] == 'Login')
	{
		$username = $_POST['name'];
		$password = $_POST['password'];
		
		try{
			include '../models/login.php';
			$login = new login($username, $password);
			
			if($login){
				session_start();
				$_SESSION['username'] = $username;
				header('Location: ../index.php');
			}
		}catch (Exception $exc){
			echo $exc->getMessage();
		}
	}
		
	
	if(isset($_POST['submit']) && $_POST['submit'] == 'Register'){
		$data['name'] 	  = $_POST['name'];
		$data['email']	  = $_POST['email'];
		$data['username'] = $_POST['username'];
		$data['password'] = $_POST['password'];
		
		try{
			include '../models/register.php';
			$register = new register($data);
			
			if($register){
				header('Location: index.php');
			}
			
		}catch(Exception $exc){
			echo $exc->getMessage();
		}
	 }
		
}else{
	include '../views/login.php';
}

?>