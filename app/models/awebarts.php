<?php
	class awebarts{
		private   $cxn;
		
		function connect_DB(){
			include 'database.php';
			$vars      = 'include/vars.php';
			$this->cxn = new database($vars);
		}
		
		function close(){
			$this->cxn->close();
		}
		
		function mysqli_link(){
			return $con = $this->cxn->connect();
			 
		}
		
		
	}
?>