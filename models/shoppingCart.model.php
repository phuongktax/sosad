<?php
	class ShoppingCart{
		public $username= null;
		public $proID= null;
    	public $quantity= null;
    	public $price= null;
    	public $date=null;
		public function build($row){
			$object =  new self;
			$object->shoppingcartID = $row['shoppingcartID'];
			$object->userName  = $row['username'];
			$object->productID = $row['productid'];
			$object->quantity = $row['quantity'];
			$object->price = $row['price'];
			$object->photoLink = $row['photoURL'];
			$object->productName = $row['productname'];
		    $object->date = $row['boughtdate'];
			
			
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

		public function getByName($name){
    		$sql="SELECT shoppingcart.quantity, shoppingcart.shoppingcartID,shoppingcart.boughtdate,shoppingcart.username, product.productid, product.photoURL, product.price, product.productname, shoppingcart.productid
					FROM shoppingcart
					INNER JOIN product
					ON shoppingcart.productID=product.productID
					WHERE username='$name' AND boughtdate IS null";
    		return self::getBySql($sql);
    	}
    	public function Count($name){
        	$sql="SELECT COUNT(*) FROM shoppingcart WHERE userName='$name' AND `boughtdate` IS NULL";
        	global $database;
			$result = $database->execute($sql);
			$row = $database->fetch($result);
        	return $row;
        	//echo $sql;
    	}
    	public function UpdateMul(){
    		global $database;
    		$username = $this->username;
    		$proID= $this->proID; 
    		$quantity= $this->quantity;
    		$price= $this->price;
    		$Count=self::Count($username);
    		$Count1=implode($Count);
    		//echo $Count1;
    		for($i=0; $i<$Count1; $i++){
     			$quantity1=$quantity[$i];
     			$proIDLoop=$proID[$i];
     			//echo $quantity1;
        		$sql[$i]="UPDATE shoppingcart SET quantity='$quantity1' WHERE productid='$proIDLoop' AND username='$username'";
        		$database->execute($sql[$i]);
        		echo $sql[$i];
        	}
    	}
    	public function Update(){
    		global $database;
    		$username = $this->username;
    		$proID= $this->proID; 
    		$quantity= $this->quantity;
    		$price= $this->price;
    		//$date= $this->date;
    		//echo $date;
    		//echo $username;
    		//echo $Count1;
    		
 			//echo $quantity1;
    		$sql="UPDATE shoppingcart SET quantity='$quantity' WHERE productid='$proID' AND username='$username'";
    		$database->execute($sql);
    		//echo $sql[$i];
    	}
    	public function UpdateCart(){
    		global $database;
    		$username = $this->username;
    		$date= $this->date;
    		//echo $date;
    		//echo $username;
    		//echo $Count1;
    		
 			//echo $quantity1;
    		$sql="UPDATE shoppingcart SET boughtdate='$date' WHERE username='$username'";
    		$database->execute($sql);
    		//echo $sql[$i];
    	}
    	


    	
    	public function Insert(){
    		//$new=  new self;
    		global $database;
    		//$proID= $new->proID;
			//$username= $new->username;
			//$price = $new->price;
			//$quantity = $new->quantity;
    		 $username = $this->username;
    		 $proID= $this->proID; 
    		 $quantity= $this->quantity;
    		 $price= $this->price;
    		
    		$sql="INSERT INTO shoppingcart (username, productid, quantity, price) VALUES ('$username', '$proID', '$quantity', '$price')";
    		return $database->execute($sql);
    	}

    	public function Delete($count1, $multi, $name){
    		global $database;
 			for($i=0; $i<$count1; $i++){
 			$delete=$multi[$i];
 			//echo $i."<br>";
 			//echo $delete."<br>";
 			
 			//echo $multi[$i];
     		$sql[$i]="DELETE FROM shoppingcart WHERE productid='$delete' AND username='$name'";
     		$database->execute($sql[$i]);
     		//echo  $sql[$i];
 			}
 			

 			
		}
		public function save($shopID,$name) {
				$result= $this->getByName($name);
				$Count= $this->Count($name);
				
				$conCount=implode($Count);
				//echo $conCount;
				for($i=0; $i<$conCount; $i++){
				$id=$result[$i]->shoppingcartID;
				$proID=$result[$i]->productID;
				$Uname=$result[$i]->userName;
				if ( $shopID==$id && $name==$Uname) {
				return $this->UpdateMul();	
				}elseif($shopID==$proID && $name==$Uname){
				return $this->Update();
				}else{
				
				}
			}return $this->Insert();
	}
}
?>