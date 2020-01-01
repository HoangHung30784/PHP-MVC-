<?php
    switch ($data["show_page"]) {
        case 'productByCate':
            require_once "./Frontend/Views/pages/productByCate.php";
            break;
        case 'Detail':
            require_once "./Frontend/Views/pages/Detail.php";
            break;
        
        case 'Home':
            require_once "./Frontend/Views/pages/product.php";
            break;
        case 'Cart':
            require_once "./Frontend/Views/pages/Cart.php";
            break;
        case 'dangki':
            require_once "./Frontend/Views/pages/dangki.php";
            break;
        case 'login':
            require_once "./Frontend/Views/pages/login.php";
            break;
        case 'dangki':
            require_once "./Frontend/Views/pages/dangki.php";
            break;
        case 'AddCart':
            require_once "./Frontend/Views/pages/AddCart.php";
            break;
        case 'updateCart':
            require_once "./Frontend/Views/pages/updateCart.php";
            break;
        case 'thanhtoan':
            require_once "./Frontend/Views/pages/thanhtoan.php";
            break;
        case 'thongbao':
            require_once "./Frontend/Views/pages/thongbao.php";
            break;

        default: 
            require_once "./Frontend/Views/pages/product.php";
            break;
    }
?>