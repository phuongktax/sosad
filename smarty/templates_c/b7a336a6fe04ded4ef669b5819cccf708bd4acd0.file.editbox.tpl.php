<?php /* Smarty version Smarty-3.0.5, created on 2015-04-02 23:12:34
         compiled from "views\editbox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26261551d6a72ac8ab6-78570274%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7a336a6fe04ded4ef669b5819cccf708bd4acd0' => 
    array (
      0 => 'views\\editbox.tpl',
      1 => 1427990847,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26261551d6a72ac8ab6-78570274',
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
		<h2>Chào mừng bạn đến với <br>trang quản lý sản phẩm</h2>
			</td>
		</tr>
	</table>
	<table border='1px'  width='1000px'>
		<tr>
			<th>
    		<a href="manager.php"><span>Trang chủ</span></a>
    		<a href="managerproduct.php"><span>Trở về</span></a>
    		</th>
		</tr>
	</table>
		<table border='1px' width='1000px'>
			<form action="editbox.php" method="POST">	
			<th>Thông tin</th>
			<th>Ảnh mô tả</th>
			<th></th>
						 <tr >
						 	<td><br><br>
						 &nbsp&nbspID sản phẩm:&nbsp&nbsp&nbsp 	<?php echo $_smarty_tpl->getVariable('newProduct')->value->productID;?>
<input size="2" type="hidden" value='<?php echo $_smarty_tpl->getVariable('newProduct')->value->productID;?>
' name="productID"><br><br>	
						 
						&nbsp&nbspLoại sản phẩm: 			<input size="2" type="text" value='<?php echo $_smarty_tpl->getVariable('newProduct')->value->productCat;?>
' name="productCatID"><br><br>
						 
						 &nbsp&nbspTên sản phẩm:&nbsp 	<input type="text" value='<?php echo $_smarty_tpl->getVariable('newProduct')->value->productName;?>
' name="productName"><br><br>
						 
						 &nbsp&nbspMô tả sản phẩm:&nbsp <br>&nbsp<textarea cols="50" rows="5" value='' name="productDesc"><?php echo $_smarty_tpl->getVariable('newProduct')->value->productDesc;?>
</textarea><br><br>
						 
						 &nbsp&nbspSố lượng:&nbsp&nbsp&nbsp&nbsp&nbsp<input size="2" type="text" value='<?php echo $_smarty_tpl->getVariable('newProduct')->value->productQuantity;?>
' name="quantity"><br><br>
						 
						&nbsp&nbspGiá/sản phẩm:&nbsp 	<input size="5" type="text" value='<?php echo $_smarty_tpl->getVariable('newProduct')->value->productPrice;?>
' name="price"></td><br>
						 
						<td align='center'><img src='<?php echo $_smarty_tpl->getVariable('tmp')->value;?>
<?php echo $_smarty_tpl->getVariable('newProduct')->value->productLink;?>
' width="200"></td><br>
					
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