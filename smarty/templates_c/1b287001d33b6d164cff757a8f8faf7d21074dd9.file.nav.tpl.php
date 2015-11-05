<?php /* Smarty version Smarty-3.0.5, created on 2015-11-05 13:26:08
         compiled from "views\nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31042551c1cfd749721-98332412%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b287001d33b6d164cff757a8f8faf7d21074dd9' => 
    array (
      0 => 'views\\nav.tpl',
      1 => 1427904452,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31042551c1cfd749721-98332412',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div id="nav">
		<div id="nav_wrapper">
		<tr>
			<td>
				<ul><li>
    		<a href="index.php"><span><img src="images/recu_home.png">&nbspTrang chủ</span></a>
			</li><li>
    		<a href="index.php"><span>Sản phẩm&nbsp<img src="images/blue_arrow_down.png"></span></a>
			<ul>
				<li><a href="sp.php?id=1">Giày dép</a></li>
				<li><a href="sp.php?id=2">Túi Xách</a></li>
				<li><a href="sp.php?id=3">Đồng hồ</a></li>
			</ul>

			</li><li>
    		<a href="search.php"><span><img src="images/search-3-xxl.png">Tìm kiếm</span></a>
			</li><li>
    		<a href="account.php"><span><img src="images/user.png">Tài khoản</span></a>
			</li><li>
    		<a href="shoppingcart.php"><span><img src="images/cart.png">&nbspGiỏ hàng</span></a>
    		</li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<li>
    		<form action="login.php" method="post">
    		<a>Đăng xuất</a><input type="image" name="submit" value="submit" src="images/out.png" width="40" class="logout" align="right">
    		<input type="hidden" value="a" name="destroy">
    		</form>
			</li>
    		</td>
		</tr>
</div>
</div>