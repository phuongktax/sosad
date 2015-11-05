<?php
	include('configs/configs.php');
	$date = date('Y/m/d', time());
	//echo $date;
	$username=$_POST['name1'];
	//echo $name;
	$newShopping = new ShoppingCart();
	$newShopping->date=$date;
	$newShopping->username=$username;
	$newUpdate= $newShopping->UpdateCart();
	$smarty->display('orderimple.tpl');
?>