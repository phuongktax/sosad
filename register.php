<?php
	include('configs/configs.php');
	if(isset($_POST['sub'])){
	$ten=$_POST['ten'];
	echo $matkhau=$_POST['matKhau'];
	$diaChiMail=$_POST['diaChiMail'];
	$newUser= new User();
	$newUser->userName=$ten;
	$newUser->passWord=$matkhau;
	$newUser->eMail=$diaChiMail;
	$newUser->Insert();
	header('location: login.php');
	}else{
	$smarty->display('register.tpl');
	}
?>