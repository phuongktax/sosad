<?php /* Smarty version Smarty-3.0.5, created on 2015-11-05 13:34:06
         compiled from "views\managerproduct.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14513551e40f9489565-36514010%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '815835d7eeb1ac2c9a5e5c46b70082794973da8f' => 
    array (
      0 => 'views\\managerproduct.tpl',
      1 => 1428044184,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14513551e40f9489565-36514010',
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
		<h2>Chào mừng bạn đến với <br>trang quản lý sản phẩm</h2>
			</td>
		</tr>
	</table>
	<table height='20px' width='1000px' border='1px'>
		<form action="deleteProimple.php" method="POST">	
		<tr>
			<th>
    		<a href="managerproduct.php"><span>Quản lý sản phẩm</span></a>
			
    		<a href="manageuser.php"><span>Quản lý người dùng</span></a>
			
    		<a href="#"><span>Quản lý đơn hàng</span></a>
			
    		<a href="index.php"><span>Trang chủ</span></a>
    		<th><button type="submit" formaction="addproduct.php">Thêm sản phẩm</button></th>
    		</th>
    		<th>Nhập ID sản phẩm cần sửa:<br> <input type="text" value="" name="proID">
				<button type="submit" formaction="editbox.php">Sửa</button>
    		</th>
		</tr>
		
		</table><table border="1px" height="50px" width='1000px'>
		<tr><th>Thông tin sản phẩm</th></tr></table>
			<table border='1px'  width='1000px'>
			<th align='center'>ID sản phẩm <br><input type="submit"  id="delete" name ="delete" value="Xóa"></th>
			<th align='center'>ID loại sản phẩm</th>
			<th align='center'>Tên sản phẩm</th>
			<th align='center'>Thứ tự</th>
			<th align='center'>Hạn sản phẩm</th>
			<th align='center'>Số lượng</th>
			<th align='center'>Giá/sản phẩm</th>
			<th align='center'>Ảnh mô tả</th>
			<th align='center'>Ngày nhập</th>
				<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['a']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['name'] = 'a';
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('Product')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['a']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['a']['total']);
?>
						 <tr>
						 <td align='center'><input name="multidelete[]" type="checkbox" id="multidelete[]" value='<?php echo $_smarty_tpl->getVariable('Product')->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]->productID;?>
'><?php echo $_smarty_tpl->getVariable('Product')->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]->productID;?>

						 </td>
						  <td align='center'><?php echo $_smarty_tpl->getVariable('Product')->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]->productCat;?>
</td>
						  
						 <td align='center'><?php echo $_smarty_tpl->getVariable('Product')->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]->productName;?>
</td>
						 <td align='center'><?php echo $_smarty_tpl->getVariable('Product')->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]->productDesc;?>
</td>
						
						
						
						 <td align='center'><?php echo $_smarty_tpl->getVariable('Product')->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]->productExpired;?>
</td>
						 <td align='center'><?php echo $_smarty_tpl->getVariable('Product')->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]->productQuantity;?>
</td>
						  <td align='center'><?php echo $_smarty_tpl->getVariable('Product')->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]->productPrice;?>
</td>
						 <td align='center'><img src='<?php echo $_smarty_tpl->getVariable('tmp')->value;?>
<?php echo $_smarty_tpl->getVariable('Product')->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]->productLink;?>
' width="100"></td>
						 <td align='center'><?php echo $_smarty_tpl->getVariable('Product')->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]->productImport;?>
</td>
						
						 </tr>
				
				<?php endfor; endif; ?>
		
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