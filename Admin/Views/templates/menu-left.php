 

 <?php
$open = $data["open"];
 ?>
 <div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav side-nav">
		    <li class="<?php echo isset($open) && $open =='default' ? 'active' : '' ?>">
		        <a href="<?php echo base_url() ?>/admin"><i class="fa fa-fw fa-dashboard"></i> Bảng điều khiển</a>
		    </li>
		    <li class="<?php echo isset($open) && $open =='category' ? 'active' : '' ?>">
		        <a href="<?php echo base_url() ?>/admin/category/showCategoryList"><i class="fa fa-list"></i> Danh mục</a>
		    </li>
		    <li class="<?php echo isset($open) && $open =='product' ? 'active' : '' ?>">
		        <a href="<?php echo base_url() ?>/admin/product/showProductList"><i class="fa fa-database"></i> Sản phẩm</a>
		    </li>
		   
		     <li class="<?php echo isset($open) && $open =='user' ? 'active' : '' ?>">
		        <a href="<?php echo base_url() ?>/admin/user/showUserList"><i class="fa fa-database"></i> Khách hàng</a>
		    </li>
		    <li class="<?php echo isset($open) && $open =='transaction' ? 'active' : '' ?>">
		        <a href="<?php echo base_url() ?>/admin/Transaction/showTransactionList"><i class="fa fa-database"></i> Quản lý đơn hàng</a>
		    </li>
		    <li class="<?php echo isset($open) && $open =='admin' ? 'active' : '' ?>">
		        <a href="<?php echo base_url() ?>/admin/admin/showAdminList"><i class="fa fa-database"></i> Quản trị viên</a>
		    </li>
		</ul>
</div>