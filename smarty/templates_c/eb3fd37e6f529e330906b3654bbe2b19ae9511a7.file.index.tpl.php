<?php /* Smarty version Smarty-3.0.5, created on 2015-11-05 13:59:25
         compiled from "views\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6453563afe4d3b0858-01930302%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb3fd37e6f529e330906b3654bbe2b19ae9511a7' => 
    array (
      0 => 'views\\index.tpl',
      1 => 1446706758,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6453563afe4d3b0858-01930302',
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


<!-- <?php $_template = new Smarty_Internal_Template("nav.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?> -->
<br>
	<table width="1002px">
		<tbody class='content' id='noidung'>
			<tr><td colspan="5" align="center">
			<p>Sản phẩm giày nổi bật</p></td></tr>
	<tr>
		<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['a']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['name'] = 'a';
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('post')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
			<td align="center">
			<a href="viewdetails.php?id=<?php echo $_smarty_tpl->getVariable('post')->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]->productID;?>
"><img src="<?php echo $_smarty_tpl->getVariable('tmp')->value;?>
<?php echo $_smarty_tpl->getVariable('post')->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]->productLink;?>
" width='130px' height='160px'></a><br>
			<r>Giá: </b><?php echo $_smarty_tpl->getVariable('post')->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]->productPrice;?>
<br>
			<r>Số lượng: </b><?php echo $_smarty_tpl->getVariable('post')->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]->productQuantity;?>
<br>			
			<r>Tên sản phẩm: </b><?php echo $_smarty_tpl->getVariable('post')->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]->productName;?>
<br>
				<form action="order.php" method="post">
					<input type="text" name="quantity" value="" size="1" class="quantitybox" required>
					<input type="hidden" name="price" value='<?php echo $_smarty_tpl->getVariable('post')->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]->productPrice;?>
'>
					<input type="hidden" name="name" value='<?php echo $_smarty_tpl->getVariable('name')->value;?>
'>
					<input type="hidden" name="proID" value='<?php echo $_smarty_tpl->getVariable('post')->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]->productID;?>
'>
					<input type="image" name="submit" src="images/button.png" alt="Order!" height="32" class="buttonorder" align="right"><br><br>
			</form>
			</td>
	<?php endfor; endif; ?>
	</tr>
			<tr><td colspan="5" align="center">
			<p>Sản phẩm túi xách nổi bật</p></td></tr>
	<tr>
		<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['a']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['name'] = 'a';
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('post1')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
			<td align="center"><br>
			<a href="viewdetails.php?id=<?php echo $_smarty_tpl->getVariable('post1')->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]->productID;?>
"><img src="<?php echo $_smarty_tpl->getVariable('tmp')->value;?>
<?php echo $_smarty_tpl->getVariable('post1')->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]->productLink;?>
" width='130px' height='160px'></a><br>
			<r>Giá: </b><?php echo $_smarty_tpl->getVariable('post1')->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]->productPrice;?>
<br>
			<r>Số lượng: </b><?php echo $_smarty_tpl->getVariable('post1')->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]->productQuantity;?>
<br>			
			<r>Tên sản phẩm: </b><?php echo $_smarty_tpl->getVariable('post1')->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]->productName;?>
<br>
				<form action="order.php" method="post">
					<input type="text" name="quantity" value="" size="1" class="quantitybox" required>
					<input type="hidden" name="price" value='<?php echo $_smarty_tpl->getVariable('post1')->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]->productPrice;?>
'>
					<input type="hidden" name="name" value='<?php echo $_smarty_tpl->getVariable('name')->value;?>
'>
					<input type="hidden" name="proID" value='<?php echo $_smarty_tpl->getVariable('post1')->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]->productID;?>
'>
					<input type="image" name="submit" src="images/button.png" alt="Order!" height="32" class="buttonorder" align="right"><br><br>
			</form>
			</td>
	<?php endfor; endif; ?>
	</tr>
			<tr><td colspan="5" align="center">
			<p>Sản phẩm đồng hồ nổi bật</p></td></tr>
	<tr>
		<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['a']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['name'] = 'a';
$_smarty_tpl->tpl_vars['smarty']->value['section']['a']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('post2')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
			<td align="center"><br>
			<a href="viewdetails.php?id=<?php echo $_smarty_tpl->getVariable('post2')->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]->productID;?>
">
			<img src="<?php echo $_smarty_tpl->getVariable('tmp')->value;?>
<?php echo $_smarty_tpl->getVariable('post2')->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]->productLink;?>
" width='130px' height='160px'></a><br>
			<r>Giá: </b><?php echo $_smarty_tpl->getVariable('post2')->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]->productPrice;?>
<br>
			<r>Số lượng: </b><?php echo $_smarty_tpl->getVariable('post2')->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]->productQuantity;?>
<br>	
			<r>Tên sản phẩm: </b><?php echo $_smarty_tpl->getVariable('post2')->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]->productName;?>
<br>
				<form action="order.php" method="post">
					<input type="text" name="quantity" value="" size="1" class="quantitybox" required>
					<input type="hidden" name="price" value='<?php echo $_smarty_tpl->getVariable('post2')->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]->productPrice;?>
'>
					<input type="hidden" name="name" value='<?php echo $_smarty_tpl->getVariable('name')->value;?>
'>
					<input type="hidden" name="proID" value='<?php echo $_smarty_tpl->getVariable('post2')->value[$_smarty_tpl->getVariable('smarty')->value['section']['a']['index']]->productID;?>
'>
					<input type="image" name="submit" src="images/button.png" alt="Order!" height="32" class="buttonorder" align="right"><br><br>
			</form>
			</td>
	<?php endfor; endif; ?>	
	</tr>
	</table><br>
</tbody>
<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>