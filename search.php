<?php
	include('configs/configs.php');
	$tmp="images/productimg/";
	//echo $_POST["description"];
	$imple='';
	if(isset($_POST["description"])){
		
		$imple= Product::Search($_POST["description"]);
		$smarty->assign('Desc',$imple);
		//print_r($imple);
		$smarty->assign('tmp', $tmp);
		$smarty->display('search.tpl');
	}else{
		echo null;
		$smarty->assign('Desc',$imple);
		$smarty->display('search.tpl');
	}
	
?>