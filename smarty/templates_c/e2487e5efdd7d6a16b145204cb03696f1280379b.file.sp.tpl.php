<?php /* Smarty version Smarty-3.0.5, created on 2015-11-05 14:06:12
         compiled from "views\sp.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10687563affe4a02e47-90931074%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2487e5efdd7d6a16b145204cb03696f1280379b' => 
    array (
      0 => 'views\\sp.tpl',
      1 => 1446707159,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10687563affe4a02e47-90931074',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<?php if ($_smarty_tpl->getVariable('isUser')->value=='1'){?>
    <?php $_template = new Smarty_Internal_Template("nav.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<?php }else{ ?>
    <?php $_template = new Smarty_Internal_Template("nav_guest.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<?php }?>
<br>
	<table width="1002px">
		<tbody class='content' id='noidung'>
			<tr><td colspan="5" align="center">
			<p>Sản phẩm giày nổi bật</p></td></tr>
			<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['a']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['name'] = 'a';
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('sp')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
			 <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['a']['iteration']%5==1){?>
			 <tr>
			 <?php }?>
			<td align="center">
			<a href="viewdetails.php?id=<?php echo $_smarty_tpl->getVariable('sp')->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]->productID;?>
"><img src="<?php echo $_smarty_tpl->getVariable('tmp')->value;?>
<?php echo $_smarty_tpl->getVariable('sp')->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]->productLink;?>
" width='130px' height='160px'></a><br>
			<r>Giá: </b><?php echo $_smarty_tpl->getVariable('sp')->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]->productPrice;?>
<br>
			<r>Số lượng: </b><?php echo $_smarty_tpl->getVariable('sp')->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]->productQuantity;?>
<br>			
			<r>Tên sản phẩm: </b><?php echo $_smarty_tpl->getVariable('sp')->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]->productName;?>
<br>
			<form action="order.php" method="post">
					<input type="text" name="quantity" value="" size="1" class="quantitybox" required>
					<input type="hidden" name="price" value='<?php echo $_smarty_tpl->getVariable('sp')->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]->productPrice;?>
'>
					<input type="hidden" name="name" value='<?php echo $_smarty_tpl->getVariable('name')->value;?>
'>
					<input type="hidden" name="proID" value='<?php echo $_smarty_tpl->getVariable('sp')->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]->productID;?>
'>
					<input type="image" name="submit" src="images/button.png" alt="Order!" height="32" class="buttonorder" align="right"><br><br>
			</form></td>
			<?php endfor; endif; ?>
			</tr>
		</table><br>
</tbody>
<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>