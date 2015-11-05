<?php
session_start();
// Initialize site configuration
include('configs/configs.php');

$isUser =0;
if(isset($_SESSION["name"])){
	$name = $_SESSION["name"];
	$isUser =1;
	$smarty->assign('name', $name);
}
	

// Get posts from database
$posts = Product::getByProCatID(1,5);
$posts1 = Product::getByProCatID(2,5);
$posts2 = Product::getByProCatID(3,5);

$tmp="images/productimg/";
//var_dump($posts)
//print_r($posts);
//$posts=array(1001,1002,1003);
//print_r($posts);
//echo $posts;
//echo "abc";
// Assign array of data to smarty

$smarty->assign('post', $posts);
$smarty->assign('post1', $posts1);
$smarty->assign('post2', $posts2);

$smarty->assign('tmp', $tmp);
$smarty->assign('isUser', $isUser);


// Display page
$smarty->display('index.tpl');

?>