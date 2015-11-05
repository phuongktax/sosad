<?php
	include('configs/configs.php');

	
	//print_r($newProduct);
	//---Thuc hien cap nhat, goi ham cap nhat va gan cac gia tri
	if (isset($_POST['productID'])){
		$productID=$_POST['productID'];
		$roductCatID=$_POST['productCatID'];
		$productName=$_POST['productName'];
		$productDesc=$_POST['productDesc'];
		$quantity=$_POST['quantity'];
		$price=$_POST['price'];
		$newPro = new Product();
		$newPro->productID=$productID;
		$newPro->productQuantity=$quantity;
		$newPro->productPrice=$price;
		$newPro->productName=$productName;
		$newPro->productDesc=$productDesc;
		$newPro->productCatID=$roductCatID;
		$newPro->Update();
		header('location: managerproduct.php');
	}else{
		//---hien ra chi tiet san pham o trang cap nhat san pham!
		$proID = $_POST['proID'];
		$tmp="images/productimg/";
		$newProduct = Product::getByID($proID);
		//print_r($newProduct)
		$smarty->assign('newProduct',$newProduct);
		$smarty->assign('tmp', $tmp);
		$smarty->display('editbox.tpl');
	}

	
?>