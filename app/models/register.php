<?php
//`id`, `name`, `username`, `password`, `email`

	class register{
		private $name;
		private $email;
		private $username;
		private $password;
		private $cxn; //database object
		
		function __construct($data){
			if(is_array($data)){
				$this->setData($data);
			}else{
				throw new Exception ('Error: Data must be in array.');
			}
			
			// connect database
			$this->connect_DB();
			//insert data
			$this->addUser();
			
		}
		
		private function setData($data){
			$this->name 	= $data['name'];
			$this->email 	= $data['email'];
			$this->username = $data['username'];
			$this->password = $data['password'];
		}
		
		private function connect_DB(){
			include 'models/database.php';
			$vars      = '../include/vars.php';
			$this->cxn = new database($vars);
		}
		
		function addUser (){
			//`id`, `name`, `username`, `password`, `email`
			$query  = "INSERT INTO `users` (`name`, `username`, `password`, `email`) VALUES ("$this->name","$this->username","$this->password","$this->email")";
			$result = mysqli_query($this->cxn->connect(), $query);
			
			if($result){
				return TRUE;
			}else{
				throw new Exception ('Inserted Error');
			}
		}
		
		function close(){
			$this->cxn->close();
		}
		
	}

?>