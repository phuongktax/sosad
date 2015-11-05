<?php /* Smarty version Smarty-3.0.5, created on 2015-04-03 14:10:13
         compiled from "views\addproduct.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1486551e3cd513b155-48530556%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cccac7736943967c9be57bec99783caddac4f4be' => 
    array (
      0 => 'views\\addproduct.tpl',
      1 => 1428044949,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1486551e3cd513b155-48530556',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_html_options')) include 'C:\xampp\htdocs\ShoppingCart\smarty\libs\plugins\function.html_options.php';
?><<?php ?>?php
	include ('project1_shoppingcart_dbConnect.php')
?<?php ?>>
<html>
<head>
	<link rel="stylesheet" type="text/css" media="screen" href="css/managerpage.css">
<meta charset="utf-8">
<title>
Đây là trang thêm sản phẩm!
</title>
<head>
<body>
	<center>
	<table border='1px' width='1000px' height='160px'>
		<tr>
			<td>
				<img src="images/manager.png">
		<h2>Chào mừng bạn đến với <br>trang quản lý sản phẩm</h2>
			</td>
		</tr>
	</table>
	<table height='20px' width='1000px' border='1px'>	
		<tr>
			<th>
    		<a href="/hita/shoppingCart/project1_shoppingcart_managerproduct.php"><span>Quản lý sản phẩm</span></a>
			
    		<a href="/hita/shoppingCart/project1_shoppingcart_manageruser.php"><span>Quản lý người dùng</span></a>
			
    		<a href="#"><span>Quản lý đơn hàng</span></a>
			
    		<a href="/hita/shoppingCart/project1_shoppingcart_homepage.php"><span>Trang chủ</span></a>
    		</th>
    		
		</tr>
			</table>
			<form name="Image" enctype="multipart/form-data" action="addproduct.php" method="POST">
			<table border="1px" width="1000"> 
						<tr>
							<th>Thông tin</th>
							<th>Ảnh mô tả</th>
							<th>Chức năng</th>
						</tr>

						<tr>
						 	<td><br>
						 
						&nbsp&nbspLoại sản phẩm: 								<?php echo smarty_function_html_options(array('name'=>'productCat','options'=>$_smarty_tpl->getVariable('productCat')->value,'selected'=>1),$_smarty_tpl);?>

<br><br>
						 
						 &nbsp&nbspTên sản phẩm:&nbsp 							<input type="text" value="" name="productName"><br><br>
						 
						 &nbsp&nbspMô tả sản phẩm:&nbsp 						<br>&nbsp<textarea cols="50" rows="5" value="" name="productDesc"></textarea><br><br>
						 
						 &nbsp&nbspSố lượng:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input size="20" type="text" value="" name="quantity"><br><br>
						 
						&nbsp&nbspGiá/sản phẩm:&nbsp 							<input size="20" type="text" value="" name="price"></td>
						 
						<td align='center'><input type="file" name="Photo" size="2000000" accept="image/gif, image/jpeg, image/x-ms-bmp, image/x-png" size="26"><br/>
						<INPUT type="reset" class="button" value="Hủy"></td>
					
						  <td align='center'><input name="capNhat" type="submit" value="Thêm"></td>
						 </tr>
						</form>
			</table>




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