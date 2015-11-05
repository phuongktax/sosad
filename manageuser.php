<?php
	include('configs/configs.php');
		//$proID = $_POST['proID'];
		//$tmp="images/productimg/";
		//--hiện ra trang quản lý người dùng.	
		$newUser = User::getAll();
		//print_r($newUser);
		$smarty->assign('newUser',$newUser);
		//$smarty->assign('tmp', $tmp);
		$smarty->display('manageuser.tpl');
?>