<?php /* Smarty version Smarty-3.0.5, created on 2015-04-03 14:47:58
         compiled from "views\register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21778551e45aed85f19-43576462%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f41bc2df6683f4220275de4e75b2a22fa9c0a069' => 
    array (
      0 => 'views\\register.tpl',
      1 => 1428047268,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21778551e45aed85f19-43576462',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<html>
<head>
	<meta charset="utf-8">
	<title>Đăng kí mới</title>
	<link rel="stylesheet" type="text/css" media="screen" href="css/homepage.css">
</head>
<body align="center">
	<center>
		<body>
	 <div id="dangnhap">
	 	<tr>
	 		<td>
			<h3>Nhập thông tin tài khoản!</h3> <br><br>
			<form action="register.php" method="post" class="form">
    Tên tài khoản: <input type="text" name="ten" required/><br><br>
   	Mật khẩu: &nbsp&nbsp&nbsp&nbsp&nbsp <input type="password" name="matKhau"/><br><br>
    Địa chỉ Email: <input type="text" name="diaChiMail" required/><br><br>
            <input type="submit" name="sub" value="Đăng kí">
            </form>
        	</td>
    	</tr>
	</div>
</body>
</center>
</body>
</html>