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
		<h2>Chào mừng bạn đến với <br>trang quản lý sản phẩm</h2>
			</td>
		</tr>
	</table>
	<table border='1px'  width='1000px'>
		<tr>
			<th>
    		<a href="manager.php"><span>Trang chủ</span></a>
    		<a href="managerproduct.php"><span>Trở về</span></a>
    		</th>
		</tr>
	</table>
		<table border='1px' width='1000px'>
			<form action="editbox.php" method="POST">	
			<th>Thông tin</th>
			<th>Ảnh mô tả</th>
			<th></th>
						 <tr >
						 	<td><br><br>
						 &nbsp&nbspID sản phẩm:&nbsp&nbsp&nbsp 	{$newProduct->productID}<input size="2" type="hidden" value='{$newProduct->productID}' name="productID"><br><br>	
						 
						&nbsp&nbspLoại sản phẩm: 			<input size="2" type="text" value='{$newProduct->productCat}' name="productCatID"><br><br>
						 
						 &nbsp&nbspTên sản phẩm:&nbsp 	<input type="text" value='{$newProduct->productName}' name="productName"><br><br>
						 
						 &nbsp&nbspMô tả sản phẩm:&nbsp <br>&nbsp<textarea cols="50" rows="5" value='' name="productDesc">{$newProduct->productDesc}</textarea><br><br>
						 
						 &nbsp&nbspSố lượng:&nbsp&nbsp&nbsp&nbsp&nbsp<input size="2" type="text" value='{$newProduct->productQuantity}' name="quantity"><br><br>
						 
						&nbsp&nbspGiá/sản phẩm:&nbsp 	<input size="5" type="text" value='{$newProduct->productPrice}' name="price"></td><br>
						 
						<td align='center'><img src='{$tmp}{$newProduct->productLink}' width="200"></td><br>
					
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