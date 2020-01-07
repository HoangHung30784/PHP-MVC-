<?php 
$open = 'user';
require_once __DIR__."/../../autoload/autoload.php";
$id = intval(getInput("id"));
$Delusers = $db->fetchID("users",$id);
if(empty($Delusers))
{
$_SESSION['error'] = 'Dữ liệu không tồn tại';
redirectAdmin("user");
}
$num = $db->delete("users",$id);
if($num > 0)
{
$_SESSION["success"] = "Xoá thành công";
redirectAdmin("user");
}
else
{
$_SESSION["error"] = "Xoá thất bại";
redirectAdmin("user");
}