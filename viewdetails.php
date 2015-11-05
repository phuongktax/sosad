<?php
	include('configs/configs.php');
	$ID=$_GET['id'];
	$tmp="images/productimg/";
	$details= product::getById($ID);
	$smarty->assign('details', $details);
	$smarty->assign('tmp', $tmp);
	$smarty->display('details.tpl');
?>