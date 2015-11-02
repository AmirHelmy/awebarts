<?php
	class add extends awebarts{
		
		private $data;
		private $tableName;
		private $cxn;
		
		function __construct($data, $tableName){
			if(is_array($data)){
				$this->data = $data;
				$this->tableName = $tableName;
			}else{
				throw new Exception ('Error: the data must be in array');
			}
			//insert data into database
			$this->connect_DB();
			$this->addData();
			
			$this->close();
		}
		
		//insert data into database
		function addData(){
			foreach($this->data as $key => $value){
				$keys[]   = $key;
				$values[] = $value;
			}
			
			$tablefields  = implode($keys,',');
			$fieldeValues ='"'. implode($values,'","') . '"';
			
			$query = "INSERT INTO `$this->tableName` ($tablefields) VALUES ($fieldeValues)";
			
			if($result = mysqli_query($this->mysqli_link(), $query)){
				return TRUE;
			}else{
				throw new Exception("Error: faild to add data to data base!");
				return FALSE;
			}
			
		}
	}
?>