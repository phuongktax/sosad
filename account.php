<?php
	include('configs/configs.php');
	session_start();
	$name = $_SESSION["name"];
	//echo $name;
	$detailAccount = User::getByName($name);
	//print_r($detailAccount);
	$smarty->assign('detailAcc', $detailAccount);
	$smarty->display('account.tpl');
?>