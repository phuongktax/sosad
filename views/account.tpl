{include file="header.tpl"}
{include file="nav.tpl"}
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
							<li>&nbsp&nbsp&nbspTên tài khoản: <i>{$detailAcc->userName}</i></li><br>
							<li>&nbsp&nbsp&nbspMật khẩu: <i>{$detailAcc->passWord}</i></li><br>
							<li>&nbsp&nbsp&nbspEmail: <i>{$detailAcc->eMail}</i></li><br>
							<li>&nbsp&nbsp&nbspLần truy cập gần nhất: <i>{$detailAcc->lastLogin}</i></li><br>
					</td>
					<td><br>
						<img src="#" height="200" width="180"><br><br>
					</td>
				</tr>
			</tbody>
		</table>
		<br>
			
{include file="footer.tpl"}