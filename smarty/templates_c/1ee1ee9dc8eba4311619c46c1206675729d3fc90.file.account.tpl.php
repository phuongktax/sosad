<?php /* Smarty version Smarty-3.0.5, created on 2015-11-05 13:32:09
         compiled from "views\account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28213551e367094f0c8-13209164%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ee1ee9dc8eba4311619c46c1206675729d3fc90' => 
    array (
      0 => 'views\\account.tpl',
      1 => 1428043366,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28213551e367094f0c8-13209164',
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
		<table width='1000' height="200">
			<tbody class='content' id='noidung'>
				<th align="center" colspan='3'>
					<form action="editmem.php" method="post">
						<input type="image" name="submit" value="submit" src="images/Edit.png" width="60" align="left">
					</form>
					<p>Dưới đây là thông tin tài khoản của bạn</p></th>
				<tr><td><b>Thông tin</b></td><td><b>Ảnh đại diện</b></td></tr>
				<tr>
					<td align="left">
							<li>&nbsp&nbsp&nbspTên tài khoản: <i><?php echo $_smarty_tpl->getVariable('detailAcc')->value->userName;?>
</i></li><br>
							<li>&nbsp&nbsp&nbspMật khẩu: <i><?php echo $_smarty_tpl->getVariable('detailAcc')->value->passWord;?>
</i></li><br>
							<li>&nbsp&nbsp&nbspEmail: <i><?php echo $_smarty_tpl->getVariable('detailAcc')->value->eMail;?>
</i></li><br>
							<li>&nbsp&nbsp&nbspLần truy cập gần nhất: <i><?php echo $_smarty_tpl->getVariable('detailAcc')->value->lastLogin;?>
</i></li><br>
					</td>
					<td><br>
						<img src="#" height="200" width="180"><br><br>
					</td>
				</tr>
			</tbody>
		</table>
		<br>
			
<?php $_template = new Smarty_Internal_Template("footer.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>