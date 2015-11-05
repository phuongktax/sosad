<?php /* Smarty version Smarty-3.0.5, created on 2015-04-01 19:17:46
         compiled from "views\editmem.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12178551be1ea9ebfa1-81260853%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f90aa405fc2c2e6471e306d073d3aba3f0cee7c' => 
    array (
      0 => 'views\\editmem.tpl',
      1 => 1427888786,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12178551be1ea9ebfa1-81260853',
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
					<p>Vui lòng cập nhật lại thông tin!</p></th>
				<tr><td><b>Thông tin</b></td><td><b>Ảnh đại diện</b></td></tr>
				<tr>
					<td >
							<form action="#" method="post">
								Gửi<input type="image" name="submit" value="submit" src="images/c.png" width="60" align="center">
							<li>&nbsp&nbsp&nbspTên tài khoản: <i><input type="text" value='<?php echo $_smarty_tpl->getVariable('detailAcc')->value[0]->userName;?>
' name="Name"></i></li><br>
							<li>&nbsp&nbsp&nbspMật khẩu: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <i><input type="text" value='<?php echo $_smarty_tpl->getVariable('detailAcc')->value[0]->passWord;?>
' name="Pass"></i></li><br>
							<li>&nbsp&nbsp&nbspEmail:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <i><input type="text" value='<?php echo $_smarty_tpl->getVariable('detailAcc')->value[0]->eMail;?>
' name="mail"></i></li><br>
							<li>&nbsp&nbsp&nbsp  <i><textarea name="textarea" rows="4" cols="50"> Nội dung yêu cầu... </textarea></i></li><br>

						</form>
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