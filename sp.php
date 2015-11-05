<?php
	include('configs/configs.php');
	//echo $_GET['id'];
	session_start();
	$isUser =0;
	if(isset($_SESSION["name"])){
		$name = $_SESSION["name"];
		$isUser =1;
		$smarty->assign('name', $name);
	}
	//echo $name;
	$tmp="images/productimg/";
	if (isset($_GET['id']) && $_GET['id']==1){
	$sp = Product::getByProCatID(1,100);
	
	$smarty->assign('sp', $sp);
	// $smarty->assign('name', $name);
	$smarty->assign('isUser', $isUser);
	$smarty->assign('tmp', $tmp);
	$smarty->display('sp.tpl');
	}else{
	echo null;
	}
	if (isset($_GET['id']) && $_GET['id']==2){
	$sp = Product::getByProCatID(2,100);

	$smarty->assign('isUser', $isUser);
	
	$smarty->assign('sp', $sp);
	// $smarty->assign('name', $name);
	$smarty->assign('isUser', $isUser);
	$smarty->assign('tmp', $tmp);
	$smarty->display('sp.tpl');

	}else{
	echo null;
	}
	
	if (isset($_GET['id']) && $_GET['id']==3){
	$sp = Product::getByProCatID(3,100);
	
	$smarty->assign('sp', $sp);
	// $smarty->assign('name', $name);
	$smarty->assign('isUser', $isUser);
	$smarty->assign('tmp', $tmp);
	$smarty->display('sp.tpl');
	}else{
	echo null;
	}
	
?>