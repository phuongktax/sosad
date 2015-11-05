<?php
	include('configs/configs.php');
		//---Thuc hien cap nhat, goi ham cap nhat va gan cac gia tri
		if(isset($_POST['Name'])){
			echo $pass=$_POST['Pass'];
			echo $ID=$_POST['ID'];
			echo $email=$_POST['eMail'];
			echo $isAdmin=$_POST['isAdmin'];
			echo $name=$_POST['Name'];
			$newUser= new User();
			$newUser->ID=$ID;
			$newUser->userName=$name;
			$newUser->passWord=$pass;
			$newUser->eMail=$email;
			$newUser->isAdmin=$isAdmin;
			$newUser->Update();
			header('location: manageuser.php');

		}else{
			//--Nếu tồn tại giá trị của user thì hiện ra bảng sửa thông tin người dùng,
			$name=$_POST['search'];
			$newUser=User::getByName($name);
			//print_r($newUser);
			//$a=$newUser[0]->userName;
			//echo $a;
			$smarty->assign('newUser',$newUser);
			$smarty->display('edituser.tpl');
		}
?>