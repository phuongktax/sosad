<?php
	session_start();
	if(isset($_SESSION["name"])){
		unset($_SESSION["name"]);
		// $isUser =1;
	}
	include('configs/configs.php');
	//$a=$_POST['ten'];
	//$b=$_POST['matKhau'];
	//echo $a.$b;
	$count = User::Count();
	//echo $count;
	$count1=implode($count);
	//echo $co;
	if (isset($_POST['ten']) && isset($_POST['matKhau'])) {
		$userName = $_POST['ten'];
		$pass = $_POST['matKhau'];
		$imple = User::getAll();
		for($i=0; $i<$count1; $i++){
			$DB_user=$imple[$i]->userName;
			$DB_pass=$imple[$i]->passWord;
			$DB_isAdmin=$imple[$i]->isAdmin;
			//echo $DB_user;
			//echo $DB_pass;
			//echo $DB_isAdmin;
			if(($userName==$DB_user) && ($pass==$DB_pass)&&($DB_isAdmin==1)){
				
				$_SESSION["name"]=$userName;
				header('location:managerproduct.php');
			}elseif(($userName==$DB_user) && ($pass==$DB_pass)) {
				// session_start();
				$_SESSION["name"]=$userName;
				header('location:index.php');
			}else{
				echo null;

			}
		}			
	}
	if (isset($_POST['destroy'])){
		//session_destroy();
	}else{
		echo null;
	}
	$smarty->display('login.tpl');
?>