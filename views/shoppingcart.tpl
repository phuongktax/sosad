{include file="header.tpl"}
{include file="nav.tpl"}
			<br>
		<table width='1000' height="200">	
			<tbody class='content' id='noidung'>		
				<tr><td colspan ="7" align="center"><p>Giỏ hàng của:&nbsp{$name}</p></td>
					<form action="orderimple.php" method="post">

					<td rowspan="100" width="230">
						<input type="hidden" name="name1" value='{$name}'>
						<input name="delete" type="image"  src="images/order.png" value="order" width="200"></td>
				</form>
				</tr>
					<form action="deleteimple.php" method="POST">
						<tr><td>				
					<b>Sản phẩm số</b><br><input name="delete" type="image"  src="images/Delete_Icon.png" value="Xóa" width="40"></td>
					<td><b>Tên sản phẩm</b></td>
					<td><b>Số lượng</b><br><input type="image" name="submit" src="images/update.png" width="30"><br></td>
					<td><b>Giá/SP</b></td>
					<td><b>Ảnh mô tả</b></td>
					<td><b>Tổng tiền<br>(VND)</b></td>
				</tr>		
					{section name=c loop=$Shopping}
				<tr>
					<td align="center">	
						<input type="hidden" name="name" value='{$name}'>

						<input type="hidden" name="proID[]" value='{$Shopping[c]->productID}'>
						<input type="hidden" name="price" value='{$Shopping[c]->price}'>
						<input type="hidden" name="shopID" value="{$Shopping[c]->shoppingcartID}">
						
						{$Shopping[c]->productID}
						<input type="checkbox" name="multidelete[]" value='{$Shopping[c]->productID}'>			
					</td>
				
					<td>
						{$Shopping[c]->productName}
					</td>
					<td>
						<input type="text" value='{$Shopping[c]->quantity}' name="newQuantity[]" size="1">
					</td>
					<td>
						{$Shopping[c]->price}
					</td>
					<td>
						<img src="{$tmp}{$Shopping[c]->photoLink}" width="80" height="90">
					</td>			
					<td>
						{$total="{math equation="(x * y)" x=$Shopping[c]->quantity y=$Shopping[c]->price}"}
						{$total|number_format:0:".":","}
					</td>
				</tr>
				{/section}
				<tr><td align="center" colspan ="6"><p>Số tiền phải trả:&nbsp {$totalAll|number_format:0:".":","} </p></td></tr>
			</tbody>
		</table>

	</form>
		<br>
{include file="footer.tpl"}