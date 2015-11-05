<?php
include('configs/configs.php');
	if (isset($_POST['delete'])){
		$multi=$_POST['multidelete'];
		$newUser = new User();
		$newUser->multi=$multi;
		$newUser->Delete();
		header('location: manageuser.php');
	}
?>