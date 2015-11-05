<?php
include('configs/configs.php');
	if (isset($_POST['delete'])){
		$multi=$_POST['multidelete'];
		$newPro = new Product();
		$newPro->multi=$multi;
		$newPro->Delete();
		header('location: managerproduct.php');
	}
?>