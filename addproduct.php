<?php
include('configs/configs.php');
	$uploadDir = 'images/productimg/';
	if (isset($_POST['capNhat'])){
		echo $_POST['productName'];
		echo $_POST['productDesc'];
		echo $_POST['quantity'];
		echo $_POST['price'];
		echo $_POST['Photo'];
		echo $_POST['productCat'];
		$fileName = $_FILES['Photo']['name'];
		$tmpName  = $_FILES['Photo']['tmp_name'];
		$fileSize = $_FILES['Photo']['size'];
		$fileType = $_FILES['Photo']['type'];
		$filePath = $uploadDir . $fileName;
		$result = move_uploaded_file($tmpName, $filePath);
		if (!$result) {
		echo "Error uploading file";
		exit;
		}
		if(!get_magic_quotes_gpc())
		{
    	$fileName = addslashes($fileName);
		$filePath = addslashes($filePath);
		}
		$newProduct= new Product();
		$newProduct->productCatID=$_POST['productCat'];
		$newProduct->productQuantity=$_POST['quantity'];
		$newProduct->productPrice=$_POST['price'];
		$newProduct->productName=$_POST['productName'];
		$newProduct->productDesc=$_POST['productDesc'];
		$newProduct->filename=$fileName;
		$newProduct->Insert();
		header('location: managerproduct.php');
	}else{
		//$arrayName = array('' => , );
	$productcat= array('1'=>1,'2'=>2,'3'=>3);
	$smarty->assign('productCat',$productcat);
	$smarty->display('addproduct.tpl');
}
?>