<?php /* Smarty version Smarty-3.0.5, created on 2015-11-05 13:33:24
         compiled from "views\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14198551bdb80cf9990-36501682%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89b5bb9c8dbb5a30ba85abdf06c50b421f44e4b5' => 
    array (
      0 => 'views\\login.tpl',
      1 => 1427788908,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14198551bdb80cf9990-36501682',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<html>
<head>
	<link rel="stylesheet" type="text/css" media="screen" href="css/homepage.css">
    <meta charset="utf-8">
    <title> Login Page </title>
</head>
    <center>
    	<body>		 
   			 	<div id="dangnhap">
         		<tr>
        			<td><br>
   					 <h3>Please completely fill out this form!</h3> <br>
   					 		  <form action="login.php" method="POST" class="form">
   					&nbsp&nbsp&nbspAccount 	 <input type="text" name="ten" required/><br><br>
  					 Password  <input type="password" name="matKhau" required/><br><br>
   					         	<input class="button" type="submit" value="Login">
   					         	<button formaction="register.php" type="submit" class="button2">Register</button>
   					          </form>
   					         	
    		</td></tr>
		</div>
		</body>
 </center>
</html>