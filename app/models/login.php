<?php
	class login{
		private $username;
		private $password;
		private $cxn; //database object
		
		function __construct($username, $password){
			// SetData
			$this->setData($username, $password);
			// Connect DataBase
			$this->connect_DB();
			// getData
			$this->getData();
		}
		
		private function setData($username, $password){
			$this->username = $username;
			$this->password = $password;
		}
		
		private function connect_DB(){
			include 'database.php';
			$vars      = '../include/vars.php';
			$this->cxn = new database($vars);
		}
		
		function getData(){
			$query  = "SELECT * FROM `users` WHERE `username` = '$this->username' AND `password` = '$this->password'";
			$result = mysqli_query($this->cxn->connect(), $query);
			
			if(mysqli_num_rows($result) > 0){
				return TRUE;
			}else{
				throw new Exception ("Username or password not found");
			}
		}
				
		function close(){
			$this->cxn->close();
		}
		
	}

?>