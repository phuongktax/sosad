<?php
	class Product{
		public $productID = null;
		public $productQuantity = null;
		public $productPrice = null;
		public $productName = null;
		public $multi = null;
		public $productDesc = null;
		public $productCatID = null;
		public $fileName = null;

		public function build($row){
			$object = new self;
		
		// Initialize object's attributes
			$object->productID = $row['ProductID'];
			$object->productName = $row['ProductName'];
			$object->productPrice = $row['Price'];
			$object->productQuantity = $row['Quantity'];
			$object->productLink = $row['PhotoURL'];
			$object->productDesc = $row['ProductDesc'];
			$object->productExpired = $row['ExpiredDate'];
			$object->productCat = $row['ProductcatID'];
			$object->productImport = $row['ProductImportDate'];
		
		// Return object
			return $object;
		}
			public function getBySql($sql){
				global $database;
				//$database= new Database();
				//$conn=$database->Connect();
				// Get data from database
				$result = $database->execute($sql);
		
				// Initialize array to hold objects
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
				$sql ="SELECT * FROM product";

				// Execute database query
				return self::getBySql($sql);
				}

			public static function getById($productID) {

				// Sanitize user input
				$productID = (int)$productID;
		
				// Build database query
				$sql = sprintf("SELECT * FROM product WHERE ProductID = %d limit 1", $productID);

				// Execute database query
				$result = self::getBySql($sql);
		
				// Extract object from array
				$object = array_shift($result);
		
				// Return object
				return $object;
			}
			public static function getByProCatID($productcatID,$limit){
				$productcatID = (int)$productcatID;
				$sql = sprintf("SELECT * FROM product WHERE ProductcatID = %d ORDER BY ProductImportDate DESC limit %d",$productcatID,$limit);
				return self::getBySql($sql);
				//$object = array_shift($result);
				//return $object;

			}
			public static function Search($statement){
				$text = mysql_real_escape_string($statement);
				$sql ="SELECT * FROM product WHERE productname LIKE '%".$statement."%' OR productdesc LIKE '%".$text."%'";
				return self::getBySql($sql);

			}
			public function Count(){
        		$sql="SELECT COUNT(*) FROM product";
        		global $database;
				$result = $database->execute($sql);
				$row = $database->fetch($result);
        		return $row;
        	//echo $sql;
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
     			$sql[$i]="DELETE FROM product WHERE productid='$delete'";
     			$sql2[$i]="DELETE FROM shoppingcart WHERE productid='$delete'";
     			$database->execute($sql[$i]);
     			$database->execute($sql2[$i]);
     		//echo  $sql[$i];
 				}
	
			}
			public function Update(){
    		global $database;
    			$proID=$this->productID;
				$productQuantity=$this->productQuantity;
		 		$productPrice=$this->productPrice;
				$productName=$this->productName;
				$productDesc=$this->productDesc;
				$productCatID=$this->productCatID;
    		
    		$sql="UPDATE product SET Quantity='$productQuantity', Price='$productPrice', ProductName='$productName', ProductDesc='$productDesc', ProductcatID='$productCatID' WHERE productid='$proID'";
    		$database->execute($sql);
    		//echo $sql[$i];
    	}
    	public function Insert(){
    		global $database;
    		$productcatid=$this->productCatID;
			$quantity=$this->productQuantity;
		 	$price=$this->productPrice;
			$productName=$this->productName;	
			$productDesc=$this->productDesc;
			$fileName=$this->filename;
			$date = date('Y/m/d', time());
    		$sql = "INSERT INTO product (ProductCatID, ProductName, ProductDesc, Quantity, Price, PhotoURL, ProductImportDate) VALUES ('$productcatid', '$productName', '$productDesc', '$quantity', '$price','$fileName', '$date')";
    		$database->execute($sql);
    	}

	}
?>