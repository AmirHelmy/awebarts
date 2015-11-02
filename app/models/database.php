<?php

	class database{
		private $host;
		private $user;
		private $pass;
		private $database;
		private $con;
		
		function __construct($filename){
			if (is_file($filename)){
				include $filename;
			}else{
				throw new Exception ("Error: can't include dataBase file!");
			}

			$this->host 	= $host;
			$this->user 	= $user;
			$this->password = $password;
			$this->database = $database;
			$this->connect();
			$this->con = $this->connect();
			
		}
		
		function connect (){
			if (!$con = mysqli_connect($this->host, $this->user, $this->password, $this->database)){
				throw new Exception ("Can not connect to server.");
			}
			return $con;
		}
			
		
		function close(){
			mysqli_close($this->con);
		}
	}
	
	
?>