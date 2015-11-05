<?php /* Smarty version Smarty-3.0.5, created on 2015-11-05 13:30:43
         compiled from "views\shoppingcart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22171551bdb73a23fe8-46340961%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08a42bb2e5faeb32186ee0a81fda7aa71eb3f02f' => 
    array (
      0 => 'views\\shoppingcart.tpl',
      1 => 1427880968,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22171551bdb73a23fe8-46340961',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_function_math')) include 'D:\xampp\htdocs\sad\smarty\libs\plugins\function.math.php';
?><?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<?php $_template = new Smarty_Internal_Template("nav.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
			<br>
		<table width='1000' height="200">	
			<tbody class='content' id='noidung'>		
				<tr><td colspan ="7" align="center"><p>Giỏ hàng của:&nbsp<?php echo $_smarty_tpl->getVariable('name')->value;?>
</p></td>
					<form action="orderimple.php" method="post">

					<td rowspan="100" width="230">
						<input type="hidden" name="name1" value='<?php echo $_smarty_tpl->getVariable('name')->value;?>
'>
						<input name="delete" type="image"  src="images/order.png" value="order" width="200"></td>
				</form>
				</tr>
					<form action="deleteimple.php" method="POST">
						<tr><td>				
					<b>Sản phẩm số</b><br><input name="delete" type="image"  src="images/Delete_Icon.png" value="Xóa" width="40"></td>
					<td><b>Tên sản phẩm</b></td>
					<td><b>Số lượng</b><br><input type="image" name="submit" src="images/update.png" width="30"><br></td>
					<td><b>Giá/SP</b></td>
					<td><b>Ảnh mô tả</b></td>
					<td><b>Tổng tiền<br>(VND)</b></td>
				</tr>		
					<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['c']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['name'] = 'c';
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('Shopping')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['c']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['c']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['c']['total']);
?>
				<tr>
					<td align="center">	
						<input type="hidden" name="name" value='<?php echo $_smarty_tpl->getVariable('name')->value;?>
'>

						<input type="hidden" name="proID[]" value='<?php echo $_smarty_tpl->getVariable('Shopping')->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]->productID;?>
'>
						<input type="hidden" name="price" value='<?php echo $_smarty_tpl->getVariable('Shopping')->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]->price;?>
'>
						<input type="hidden" name="shopID" value="<?php echo $_smarty_tpl->getVariable('Shopping')->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]->shoppingcartID;?>
">
						
						<?php echo $_smarty_tpl->getVariable('Shopping')->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]->productID;?>

						<input type="checkbox" name="multidelete[]" value='<?php echo $_smarty_tpl->getVariable('Shopping')->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]->productID;?>
'>			
					</td>
				
					<td>
						<?php echo $_smarty_tpl->getVariable('Shopping')->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]->productName;?>

					</td>
					<td>
						<input type="text" value='<?php echo $_smarty_tpl->getVariable('Shopping')->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]->quantity;?>
' name="newQuantity[]" size="1">
					</td>
					<td>
						<?php echo $_smarty_tpl->getVariable('Shopping')->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]->price;?>

					</td>
					<td>
						<img src="<?php echo $_smarty_tpl->getVariable('tmp')->value;?>
<?php echo $_smarty_tpl->getVariable('Shopping')->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]->photoLink;?>
" width="80" height="90">
					</td>			
					<td>
						<?php ob_start();?><?php echo smarty_function_math(array('equation'=>"(x * y)",'x'=>$_smarty_tpl->getVariable('Shopping')->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]->quantity,'y'=>$_smarty_tpl->getVariable('Shopping')->value[$_smarty_tpl->getVariable('smarty')->value['section']['c']['index']]->price),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['total'] = new Smarty_variable($_tmp1, null, null);?>
						<?php echo number_format($_smarty_tpl->getVariable('total')->value,0,".",",");?>

					</td>
				</tr>
				<?php endfor; endif; ?>
				<tr><td align="center" colspan ="6"><p>Số tiền phải trả:&nbsp <?php echo number_format($_smarty_tpl->getVariable('totalAll')->value,0,".",",");?>
 </p></td></tr>
			</tbody>
		</table>

	</form>
		<br>
<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>