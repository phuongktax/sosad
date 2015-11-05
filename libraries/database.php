<?php
	class Database{
			public $isConnected;
			public $conn;
			public function Connect(){
				$this->isConnected = true;
				try{
				$this->conn = new PDO("mysql:host=localhost;dbname=shopping", DATABASE_USER, DATABASE_PASS);
				$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				//return $conn;
			}
			catch(PDOexception $e){
				$this->isConnected = false;
				throw new Exception($e->getMessage());
				
			}
	}
			public function execute($statement){
				// Open database connection
				$this->Connect();
				// Execute database statement
				$result = $this->conn->query($statement);
				// Close database connection
				$this->close();		
				// Return results
				return $result;
			}
			public function fetch($result){
				return $result->fetch(PDO::FETCH_ASSOC);
				//print_r ($exeSQL);
			}
			public function close(){
				$this->conn= null;
			}
			
}
	$database = new Database();
?>