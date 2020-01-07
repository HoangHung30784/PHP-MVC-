<?php

switch ($data['show_page']) {
	case 'admin-index':
		require_once '/../pages/admin/index.php';
		break;


	case 'category-index':
		require_once '/../pages/category/index.php';
		break;
	case 'category-add':
		require_once '/../pages/category/add.php';
		break;
	case 'category-edit':
		require_once '/../pages/category/edit.php';
		break;


	case 'product-index':
		require_once '/../pages/product/index.php';
		break;
	case 'product-add':
		require_once '/../pages/product/add.php';
		break;
	case 'product-edit':
		require_once '/../pages/product/edit.php';
		break;


	case 'transaction-index':
		require_once '/../pages/transaction/index.php';
		break;
	case 'user-index':
		require_once '/../pages/user/index.php';
		break;
	
	
	
	default:
		require_once '/content-default.php';
		break;
}

?>