<?php 

// My functions class
//require_once "./Frontend/core/Functions.php";

$key = intval(postInput('key'));
$qty = intval(postInput('qty'));
$_SESSION['cart'][$key]['qty'] = $qty;
echo 1;



 ?>