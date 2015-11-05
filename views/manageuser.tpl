
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
				{section name=a loop=$newUser}
						 <tr>
						 <td align='center'>
						 	<input name="multidelete[]" type="checkbox" id="multidelete[]" value='{$newUser[a]->userName}'>{$newUser[a]->userName}
						 	 <input name="name" type="hidden" value='{$newUser[a]->userName}'>
						 </td>

						 <td align='center'>{$newUser[a]->passWord}</td>		  
						 <td align='center'>{$newUser[a]->lastLogin}</td>
						 <td align='center'>{$newUser[a]->eMail}</td>
					 	 <td align='center'>{$newUser[a]->isAdmin}</td>					
						 </tr>
				{/section}
		
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