{include file="header.tpl"}

{if $isUser eq '1'}
    {include file="nav.tpl"}
{else}
    {include file="nav_guest.tpl"}
{/if}


<!-- {include file="nav.tpl"} -->
<br>
	<table width="1002px">
		<tbody class='content' id='noidung'>
			<tr><td colspan="5" align="center">
			<p>Sản phẩm giày nổi bật</p></td></tr>
	<tr>
		{section name=a loop=$post}
			<td align="center">
			<a href="viewdetails.php?id={$post[a]->productID}"><img src="{$tmp}{$post[a]->productLink}" width='130px' height='160px'></a><br>
			<r>Giá: </b>{$post[a]->productPrice}<br>
			<r>Số lượng: </b>{$post[a]->productQuantity}<br>			
			<r>Tên sản phẩm: </b>{$post[a]->productName}<br>
				<form action="order.php" method="post">
					<input type="text" name="quantity" value="" size="1" class="quantitybox" required>
					<input type="hidden" name="price" value='{$post[a]->productPrice}'>
					<input type="hidden" name="name" value='{$name}'>
					<input type="hidden" name="proID" value='{$post[a]->productID}'>
					<input type="image" name="submit" src="images/button.png" alt="Order!" height="32" class="buttonorder" align="right"><br><br>
			</form>
			</td>
	{/section}
	</tr>
			<tr><td colspan="5" align="center">
			<p>Sản phẩm túi xách nổi bật</p></td></tr>
	<tr>
		{section name=a loop=$post1}
			<td align="center"><br>
			<a href="viewdetails.php?id={$post1[a]->productID}"><img src="{$tmp}{$post1[a]->productLink}" width='130px' height='160px'></a><br>
			<r>Giá: </b>{$post1[a]->productPrice}<br>
			<r>Số lượng: </b>{$post1[a]->productQuantity}<br>			
			<r>Tên sản phẩm: </b>{$post1[a]->productName}<br>
				<form action="order.php" method="post">
					<input type="text" name="quantity" value="" size="1" class="quantitybox" required>
					<input type="hidden" name="price" value='{$post1[a]->productPrice}'>
					<input type="hidden" name="name" value='{$name}'>
					<input type="hidden" name="proID" value='{$post1[a]->productID}'>
					<input type="image" name="submit" src="images/button.png" alt="Order!" height="32" class="buttonorder" align="right"><br><br>
			</form>
			</td>
	{/section}
	</tr>
			<tr><td colspan="5" align="center">
			<p>Sản phẩm đồng hồ nổi bật</p></td></tr>
	<tr>
		{section name=a loop=$post2}
			<td align="center"><br>
			<a href="viewdetails.php?id={$post2[a]->productID}">
			<img src="{$tmp}{$post2[a]->productLink}" width='130px' height='160px'></a><br>
			<r>Giá: </b>{$post2[a]->productPrice}<br>
			<r>Số lượng: </b>{$post2[a]->productQuantity}<br>	
			<r>Tên sản phẩm: </b>{$post2[a]->productName}<br>
				<form action="order.php" method="post">
					<input type="text" name="quantity" value="" size="1" class="quantitybox" required>
					<input type="hidden" name="price" value='{$post2[a]->productPrice}'>
					<input type="hidden" name="name" value='{$name}'>
					<input type="hidden" name="proID" value='{$post2[a]->productID}'>
					<input type="image" name="submit" src="images/button.png" alt="Order!" height="32" class="buttonorder" align="right"><br><br>
			</form>
			</td>
	{/section}	
	</tr>
	</table><br>
</tbody>
{include file="footer.tpl"}