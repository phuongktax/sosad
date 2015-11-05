<?php /* Smarty version Smarty-3.0.5, created on 2015-04-03 12:56:46
         compiled from "views\details.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20817551e2b9e0a2781-23576308%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '934469c29e3ddb987896cf10d6b7b8f3e50d7c6d' => 
    array (
      0 => 'views\\details.tpl',
      1 => 1427822017,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20817551e2b9e0a2781-23576308',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<?php $_template = new Smarty_Internal_Template("nav.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<br>
		<table width='1000'>
			<tbody class='content' id='noidung'>
		<tr>
			<td align="left">
			<ul><li><r>Giá: </b><?php echo $_smarty_tpl->getVariable('details')->value->productPrice;?>
</li><br>
			<li><r>Số lượng: </b><?php echo $_smarty_tpl->getVariable('details')->value->productQuantity;?>
</li><br>			
			<li><r>Tên sản phẩm: </b><?php echo $_smarty_tpl->getVariable('details')->value->productName;?>
</li><br>
			<li><r>Hạn sản phẩm: </b><?php echo $_smarty_tpl->getVariable('details')->value->productExpired;?>
</li><br>
			<li><r>Mô tả sản phẩm: </b><?php echo $_smarty_tpl->getVariable('details')->value->productDesc;?>
</li>
			</td>
			<td align="center">
			<a href="viewdetails.php?id=<?php echo $_smarty_tpl->getVariable('details')->value->productID;?>
"><img src="<?php echo $_smarty_tpl->getVariable('tmp')->value;?>
<?php echo $_smarty_tpl->getVariable('details')->value->productLink;?>
" width='200px' height='250px'></a><br></td>
			</tr>
</table>
</tbody>
<br>
<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>