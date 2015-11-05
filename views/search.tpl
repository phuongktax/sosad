{include file="header.tpl"}
{include file="nav.tpl"}
<br>
	<table width="1002px">
		<tbody class='content' id='noidung'>
		<tr>
			<td colspan="5" align="center"><form action="search.php" method="POST">
										<input type="text" name="description" value="" required>
										<input type="submit" name="ok" value="Tìm kiếm">
										<form>
			</td>
		</tr>
		<tr>
			<td colspan="5" align="center"><p>Sản phẩm được tìm thấy</p></th></td>
		</tr>
			{section name=a loop=$Desc}
			 {if $smarty.section.a.iteration % 5 == 1}
			 <tr>
			 {/if}
			<td align="center">
			<img src="{$tmp}{$Desc[a]->productLink}" width='130px' height='160px'><br>
			<r>Giá: </b>{$Desc[a]->productPrice}<br>
			<r>Số lượng: </b>{$Desc[a]->productQuantity}<br>			
			<r>Tên sản phẩm: </b>{$Desc[a]->productName}<br><br></td>
			{/section}
			</tr>
		</table><br>
</tbody>
{include file="footer.tpl"}