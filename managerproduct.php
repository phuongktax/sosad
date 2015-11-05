<?php
	include('configs/configs.php');
	$tmp="images/productimg/";
	$newProduct = Product::getAll();
	//print_r($newProduct);
	$smarty->assign('tmp', $tmp);
	$smarty->assign('Product',$newProduct);
	$smarty->display('managerproduct.tpl');
?>