{include file="header.tpl"}

{if $isUser eq '1'}
    {include file="nav.tpl"}
{else}
    {include file="nav_guest.tpl"}
{/if}
<br>
	<table width="1002px">
		<tbody class='content' id='noidung'>
			<tr><td colspan="5" align="center">
			<p>Sản phẩm giày nổi bật</p></td></tr>
			{section name=a loop=$sp}
			 {if $smarty.section.a.iteration % 5 == 1}
			 <tr>
			 {/if}
			<td align="center">
			<a href="viewdetails.php?id={$sp[a]->productID}"><img src="{$tmp}{$sp[a]->productLink}" width='130px' height='160px'></a><br>
			<r>Giá: </b>{$sp[a]->productPrice}<br>
			<r>Số lượng: </b>{$sp[a]->productQuantity}<br>			
			<r>Tên sản phẩm: </b>{$sp[a]->productName}<br>
			<form action="order.php" method="post">
					<input type="text" name="quantity" value="" size="1" class="quantitybox" required>
					<input type="hidden" name="price" value='{$sp[a]->productPrice}'>
					<input type="hidden" name="name" value='{$name}'>
					<input type="hidden" name="proID" value='{$sp[a]->productID}'>
					<input type="image" name="submit" src="images/button.png" alt="Order!" height="32" class="buttonorder" align="right"><br><br>
			</form></td>
			{/section}
			</tr>
		</table><br>
</tbody>
{include file="footer.tpl"}