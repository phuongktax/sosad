
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
		<h2>Chào mừng bạn đến với <br>trang quản lý sản phẩm</h2>
			</td>
		</tr>
	</table>
	<table height='20px' width='1000px' border='1px'>
		<form action="deleteProimple.php" method="POST">	
		<tr>
			<th>
    		<a href="managerproduct.php"><span>Quản lý sản phẩm</span></a>
			
    		<a href="manageuser.php"><span>Quản lý người dùng</span></a>
			
    		<a href="#"><span>Quản lý đơn hàng</span></a>
			
    		<a href="index.php"><span>Trang chủ</span></a>
    		<th><button type="submit" formaction="addproduct.php">Thêm sản phẩm</button></th>
    		</th>
    		<th>Nhập ID sản phẩm cần sửa:<br> <input type="text" value="" name="proID">
				<button type="submit" formaction="editbox.php">Sửa</button>
    		</th>
		</tr>
		
		</table><table border="1px" height="50px" width='1000px'>
		<tr><th>Thông tin sản phẩm</th></tr></table>
			<table border='1px'  width='1000px'>
			<th align='center'>ID sản phẩm <br><input type="submit"  id="delete" name ="delete" value="Xóa"></th>
			<th align='center'>ID loại sản phẩm</th>
			<th align='center'>Tên sản phẩm</th>
			<th align='center'>Thứ tự</th>
			<th align='center'>Hạn sản phẩm</th>
			<th align='center'>Số lượng</th>
			<th align='center'>Giá/sản phẩm</th>
			<th align='center'>Ảnh mô tả</th>
			<th align='center'>Ngày nhập</th>
				{section name=a loop=$Product}
						 <tr>
						 <td align='center'><input name="multidelete[]" type="checkbox" id="multidelete[]" value='{$Product[a]->productID}'>{$Product[a]->productID}
						 </td>
						  <td align='center'>{$Product[a]->productCat}</td>
						  
						 <td align='center'>{$Product[a]->productName}</td>
						 <td align='center'>{$Product[a]->productDesc}</td>
						
						
						
						 <td align='center'>{$Product[a]->productExpired}</td>
						 <td align='center'>{$Product[a]->productQuantity}</td>
						  <td align='center'>{$Product[a]->productPrice}</td>
						 <td align='center'><img src='{$tmp}{$Product[a]->productLink}' width="100"></td>
						 <td align='center'>{$Product[a]->productImport}</td>
						
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