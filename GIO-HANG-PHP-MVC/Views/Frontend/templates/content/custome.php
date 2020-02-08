<?php
    switch ($data["show_page"]) {
        case 'productByCate':
            require_once "./Views/Frontend/pages/productByCate.php";
            break;
        case 'Detail':
            require_once "./Views/Frontend/pages/Detail.php";
            break;
        
        case 'Home':
            require_once "./Views/Frontend/pages/product.php";
            break;
        case 'Cart':
            require_once "./Views/Frontend/pages/Cart.php";
            break;
        case 'dangki':
            require_once "./Views/Frontend/pages/dangki.php";
            break;
        case 'login':
            require_once "./Views/Frontend/pages/login.php";
            break;
        
        case 'AddCart':
            require_once "./Views/Frontend/pages/AddCart.php";
            break;
        case 'updateCart':
            require_once "./Views/Frontend/pages/updateCart.php";
            break;
        case 'thanhtoan':
            require_once "./Views/Frontend/pages/thanhtoan.php";
            break;
        case 'thongbao':
            require_once "./Views/Frontend/pages/thongbao.php";
            break;

        default: 
            require_once "./Views/Frontend/pages/product.php";
            break;
    }
?>