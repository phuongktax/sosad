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
				&nbsp&nbsp&nbsp&nbsp<img class="logo" id="logo" src="images/manager.png" width="100">
		<h2>Chào mừng bạn đến với <br>trang cập thông tin người dùng</h2>
			</td>
		</tr>
	</table>
	<table border='1px'  width='1000px'>
		<tr>
			<th>
    		<a href="managerproduct.php"><span>Trang chủ quản lý</span></a>
    		<a href="manageuser.php"><span>Trở về</span></a>
    		</th>
		</tr>
	</table>
		<table border='1px' width='1000px'>
			<form action="edituser.php" method="POST">
			<th>Thông tin</th>
			<th>Ảnh đại diện</th>
			<th></th>
						 <tr >
						 	<td><br><br>	<input type="hidden" value='{$newUser->ID}' name="ID"><br><br>
						 &nbsp&nbspTên tài khoản: <input size="20" type="text" value='{$newUser->userName}' name="Name"><br><br>
						 
						&nbsp&nbspMật khẩu: &nbsp&nbsp&nbsp &nbsp&nbsp <input size="20" type="text" value='{$newUser->passWord}' name="Pass"><br><br>
						 
						 &nbsp&nbspĐịa chỉ email:&nbsp<input type="text" value='{$newUser->eMail}' name="eMail" size="20"><br><br>
						 
						 &nbsp&nbspQuyền hạn:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input size="20" type="text" value='{$newUser->isAdmin}' name="isAdmin"><br><br>
						 			 
						<td align='center'><img src="#" width="200"></td><br>
					
						  <td align='center'><input name"capNhat" type="submit" value="Cập nhật"></td>
						 </tr>			
		
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