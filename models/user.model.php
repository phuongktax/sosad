<?php
	class User{
		public $multi=null;
		public $userName = null;
		public $ID = null;
		public $passWord = null;
		public $isAdmin = null;
		public $eMail = null;

		public function build($row){
			$object =  new self;
			$object->userName = $row['username'];
			$object->ID = $row['ID'];
			$object->passWord = $row['password'];
			$object->isAdmin = $row['isadmin'];
			$object->eMail = $row['email'];
			$object->lastLogin = $row['lastlogin'];
			return $object;
		}
		public function getbySql($sql){
			global $database;
			$result = $database->execute($sql);
			$objects = array();
				while($row = $database->fetch($result)) {
				$objects[] = self::build($row);
				}
				// Return array of objects
				return $objects;
				//echo $objects;
			}	
		public static function getAll() {
	
				// Build database query
			$sql ="SELECT * FROM user";

				// Execute database query
			return self::getBySql($sql);
			}

		public function Count(){
        	$sql="SELECT COUNT(*) FROM user";
        	global $database;
			$result = $database->execute($sql);
			$row = $database->fetch($result);
        	return $row;
    	}
    	public function getByName($name){
    		$sql="SELECT * FROM user WHERE username='$name' limit 1";
    		//return self::getBySql($sql);
    		$result = self::getBySql($sql);
		
				// Extract object from array
			$object = array_shift($result);
		
				// Return object
			return $object;
    	}
    	public function Delete(){
    			global $database;
    			$count= self::Count();
    			$count1= implode($count);
    			$multi=$this->multi;
 				for($i=0; $i<$count1; $i++){
 				$delete=$multi[$i];
 			//echo $i."<br>";
 			//echo $delete."<br>";
 			
 			//echo $multi[$i];
     			$sql[$i]="DELETE FROM user WHERE username='$delete'";
     			$database->execute($sql[$i]);
     		//echo  $sql[$i];
 				}
	
			}
		public function Update(){
    			global $database;
    			//$a=new self;
    			$ID=$this->ID;
				$userName=$this->userName;
				$passWord=$this->passWord;
				$eMail=$this->eMail;
				$isAdmin=$this->isAdmin;
    			//echo $ID.$name.$pass.$email.$isAdmin;
    			$sql="UPDATE user SET username='$userName', password='$passWord', email='$eMail', isadmin='$isAdmin' WHERE ID='$ID'";
    			$database->execute($sql);
    		//echo $sql[$i];
    	}
    	public function Insert(){
    		global $database;
    		$ten=$this->userName;
    		echo $matkhau=$this->passWord;
    		$diaChiMail=$this->eMail;
    		$sql="INSERT INTO user (username, password, email)
				VALUES ('$ten', '$matkhau', '$diaChiMail')";
			$database->execute($sql);
		}
}
?>