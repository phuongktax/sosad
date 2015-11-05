<?php /* Smarty version Smarty-3.0.5, created on 2015-04-03 14:30:20
         compiled from "views\manageuser.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6793551e418cbaf281-43941433%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79ebbb367a03abb9a0e7b279881058ddd59d28e4' => 
    array (
      0 => 'views\\manageuser.tpl',
      1 => 1428046168,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6793551e418cbaf281-43941433',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<html>
<head>
<meta charset="utf-8">
<title>
Đây là trang quản lý người dùng!
</title>
<head>
<body>
	<center>
	<table border='1px' width='1000px' height='160px'>
		<tr>
			<td>
		<h2>Chào mừng bạn đến với <br>trang quản lý người dùng</h2>
			</td>
		</tr>
	</table>
	<table height='20px' width='1000px' border='1px'>
		<form action="deleteUserimple.php" method="POST">	
		<tr>
			<th>
    		<a href="managerproduct.php"><span>Quản lý sản phẩm</span></a>
			
    		<a href="manageuser.php"><span>Quản lý người dùng</span></a>
			
    		<a href="#"><span>Quản lý đơn hàng</span></a>
			
    		<a href="index.php"><span>Trang chủ</span></a>
    		<th><button type="submit" formaction="addproduct.php">Thêm sản phẩm</button></th>
    		</th>
    		<th>Nhập tên tài khoản cần sửa:<br> <input type="text" value="" name="search">
				<button type="submit" formaction="edituser.php">Sửa</button>
    		</th>
		</tr>
		
		</table><table border="1px" height="50px" width='1000px'>
		<tr><th>Thông tin người dùng</th></tr></table>
			<table border='1px'  width='1000px'>
			<th align='center'>Tài khoản <br><input type="submit"  id="delete" name ="delete" value="Xóa"></th>
			<th align='center'>Mật khẩu</th>
			<th align='center'>Lần truy cập gần nhất</th>
			<th align='center'>Địa chỉ mail</th>
			<th align='center'>Quyền hạn</th>
				<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['a']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['name'] = 'a';
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('newUser')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
						 <td align='center'>
						 	<input name="multidelete[]" type="checkbox" id="multidelete[]" value='<?php echo $_smarty_tpl->getVariable('newUser')->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]->userName;?>
'><?php echo $_smarty_tpl->getVariable('newUser')->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]->userName;?>

						 	 <input name="name" type="hidden" value='<?php echo $_smarty_tpl->getVariable('newUser')->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]->userName;?>
'>
						 </td>

						 <td align='center'><?php echo $_smarty_tpl->getVariable('newUser')->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]->passWord;?>
</td>		  
						 <td align='center'><?php echo $_smarty_tpl->getVariable('newUser')->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]->lastLogin;?>
</td>
						 <td align='center'><?php echo $_smarty_tpl->getVariable('newUser')->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]->eMail;?>
</td>
					 	 <td align='center'><?php echo $_smarty_tpl->getVariable('newUser')->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]->isAdmin;?>
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