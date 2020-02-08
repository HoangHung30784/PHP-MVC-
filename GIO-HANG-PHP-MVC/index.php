<?php
// $_SESSION['name_user']
// $_SESSION['name_id']
// $_SESSION['cart']
// $_SESSION['success']
// $_SESSION["error"]
// $_SESSION['tongtien']
//  $_SESSION['total']
?>

<?php
session_start();

require_once "config.php";
require_once "Core/App.php";
require_once "Core/Controller.php";
require_once "Databases/DB.php";
require_once "Functions/Functions.php";

$myApp = new App();

?>