<?php
	include('configs/configs.php');
	if (isset($_POST['quantity'])){
	echo $username = $_POST['name'];
	echo $price = $_POST['price'];
	echo $proID = $_POST['proID'];
	echo $quantity = $_POST['quantity'];
	
	$insert = new ShoppingCart();
	$insert->username = $username;
	$insert->proID = $proID;
	$insert->quantity = $quantity;
	$insert->price = $price;
	$insert->save($proID,$username);
	//$insert = ShoppingCart::Insert();
	header('location: shoppingcart.php');
	}
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

?>