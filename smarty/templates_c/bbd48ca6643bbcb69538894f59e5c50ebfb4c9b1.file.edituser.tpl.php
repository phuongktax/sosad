<?php /* Smarty version Smarty-3.0.5, created on 2015-04-03 01:03:31
         compiled from "views\edituser.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15080551d8473014768-98249480%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbd48ca6643bbcb69538894f59e5c50ebfb4c9b1' => 
    array (
      0 => 'views\\edituser.tpl',
      1 => 1427997742,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15080551d8473014768-98249480',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<html>
<head>
<meta charset="utf-8">
<title>
Đây là trang quản lý sản phẩm!
</title>
<head>
<body>
	<center>
	<table border='1px' width='1000px' height='160px'>
		<tr>
			<td>
				&nbsp&nbsp&nbsp&nbsp<img class="logo" id="logo" src="images/manager.png" width="100">
		<h2>Chào mừng bạn đến với <br>trang cập thông tin người dùng</h2>
			</td>
		</tr>
	</table>
	<table border='1px'  width='1000px'>
		<tr>
			<th>
    		<a href="managerproduct.php"><span>Trang chủ quản lý</span></a>
    		<a href="manageuser.php"><span>Trở về</span></a>
    		</th>
		</tr>
	</table>
		<table border='1px' width='1000px'>
			<form action="edituser.php" method="POST">
			<th>Thông tin</th>
			<th>Ảnh đại diện</th>
			<th></th>
						 <tr >
						 	<td><br><br>	<input type="hidden" value='<?php echo $_smarty_tpl->getVariable('newUser')->value->ID;?>
' name="ID"><br><br>
						 &nbsp&nbspTên tài khoản: <input size="20" type="text" value='<?php echo $_smarty_tpl->getVariable('newUser')->value->userName;?>
' name="Name"><br><br>
						 
						&nbsp&nbspMật khẩu: &nbsp&nbsp&nbsp &nbsp&nbsp <input size="20" type="text" value='<?php echo $_smarty_tpl->getVariable('newUser')->value->passWord;?>
' name="Pass"><br><br>
						 
						 &nbsp&nbspĐịa chỉ email:&nbsp<input type="text" value='<?php echo $_smarty_tpl->getVariable('newUser')->value->eMail;?>
' name="eMail" size="20"><br><br>
						 
						 &nbsp&nbspQuyền hạn:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input size="20" type="text" value='<?php echo $_smarty_tpl->getVariable('newUser')->value->isAdmin;?>
' name="isAdmin"><br><br>
						 			 
						<td align='center'><img src="#" width="200"></td><br>
					
						  <td align='center'><input name"capNhat" type="submit" value="Cập nhật"></td>
						 </tr>			
		
	</table>
	</form>
	<table border='1px' width='1000px' height='120px'>
		<tr>
			<td>
		<p>Website được phát triển bởi Tungomii</p>
			</td>
		</tr>
	</table>
	<center>
</body>
</html>