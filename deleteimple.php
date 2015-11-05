<?php
	include('configs/configs.php');
	if(isset($_POST['delete'])){
	//$delete=$_POST['delete'];
	$multi=$_POST['multidelete'];
	$name=$_POST["name"];
	echo $name;
	print_r($multi);
	$count= ShoppingCart::Count($name);
	$count1=implode($count);
	echo $count1;
	$deleteimple= ShoppingCart::Delete($count1, $multi, $name);
	header('location: shoppingcart.php');
	}else{
		if (isset($_POST['newQuantity'])){
		$shopID=$_POST['shopID'];
		$quantity= $_POST['newQuantity'];
		$proID = $_POST['proID'];
		//print_r($proID);
		$price = $_POST['price'];
		$username = $_POST['name'];

		$insert = new ShoppingCart();
		$insert->username = $username;
		$insert->proID = $proID;
		$insert->quantity = $quantity;
		$insert->price = $price;
		$insert->save($shopID,$username);
		header('location: shoppingcart.php');
		}
	}
		//echo $_POST['shopID'];
	 //print_r($_POST['newQuantity']);
	
	//print_r($count);
?>