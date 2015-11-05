<?php
include('configs/configs.php');
	$tmp="images/productimg/";
	$totalAll=0;
	session_start();
	$name = $_SESSION["name"];
	$boughtdate=NULL;
	$Shopping = ShoppingCart::getbyName($name);
	$count = ShoppingCart::Count($name);
	$count1 = implode($count);
	//echo $count1;
	//print_r($Shopping);
	
		for($i=0; $i<$count1; $i++){
		
			$price=$Shopping[$i]->price;
			$quantity=$Shopping[$i]->quantity;
			$total=$price*$quantity;
		//echo $total."<br>";
		//
		   	$date=$Shopping[$i]->date;
		   	//echo $date;
			$totalAll=$totalAll+$total;
		}
		$smarty->assign('totalAll', $totalAll);
		$smarty->assign('name', $name);
		$smarty->assign('Shopping', $Shopping);
		$smarty->assign('tmp', $tmp);
	    $smarty->display('shoppingcart.tpl');
	

	/*echo $totalAll;
	//print_r($Shopping);
	$smarty->assign('totalAll', $totalAll);
	$smarty->assign('name', $name);
	$smarty->assign('Shopping', $Shopping);
	$smarty->assign('tmp', $tmp);
	//$smarty->display('shoppingcart.tpl');
	*/
?>