{include file="header.tpl"}
{include file="nav.tpl"}
<br>
		<table width='1000'>
			<tbody class='content' id='noidung'>
		<tr>
			<td align="left">
			<ul><li><r>Giá: </b>{$details->productPrice}</li><br>
			<li><r>Số lượng: </b>{$details->productQuantity}</li><br>			
			<li><r>Tên sản phẩm: </b>{$details->productName}</li><br>
			<li><r>Hạn sản phẩm: </b>{$details->productExpired}</li><br>
			<li><r>Mô tả sản phẩm: </b>{$details->productDesc}</li>
			</td>
			<td align="center">
			<a href="viewdetails.php?id={$details->productID}"><img src="{$tmp}{$details->productLink}" width='200px' height='250px'></a><br></td>
			</tr>
</table>
</tbody>
<br>
{include file="footer.tpl"}