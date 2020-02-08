<?php
require_once "content/top.php";
require_once "content/menu-nav-top.php";
?>

<div id="maincontent">
	<div class="container">
		<!-- Cột menu bên trái -->
                    <div class="col-md-3  fixside" >
                    	<?php require_once "content/Category.php"; ?>
                    	<?php require_once "content/NewProduct.php"; ?>
                    	<?php require_once "content/PayProduct.php"; ?>
                    </div>
		<!-- End Cột menu bên trái -->

		<!-- Nội dung Cột bên phải -->
                    <div class="col-md-9 bor">
       					<?php require_once "content/custome.php"; ?>             	
                    </div>
   		<!--End Nội dung Cột bên phải -->
	</div>

</div>

<?php
require_once "content/three-ads.php"; 
require_once "content/bottom.php"; 
?>