{include file="header.tpl"}
{include file="nav.tpl"}
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
							<li>&nbsp&nbsp&nbspTên tài khoản: <i><input type="text" value='{$detailAcc[0]->userName}' name="Name"></i></li><br>
							<li>&nbsp&nbsp&nbspMật khẩu: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <i><input type="text" value='{$detailAcc[0]->passWord}' name="Pass"></i></li><br>
							<li>&nbsp&nbsp&nbspEmail:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <i><input type="text" value='{$detailAcc[0]->eMail}' name="mail"></i></li><br>
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
			
{include file="footer.tpl"}