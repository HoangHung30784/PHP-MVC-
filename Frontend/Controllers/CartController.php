<?php
/**
 * Quản lí thông tin về giỏ hàng: showCart, addCart, updateCart, deleteCart
 */
class CartController extends Controller
{
	
	public function showCart(){

		if( !isset($_SESSION['cart']) | count($_SESSION['cart']) ==0)
		{
			echo "<script> alert('Không có sản phẩm trong giỏ hàng'); location.href='index.php'</script>";
		}

		$data=[
	    		"show_page" =>"Cart"
	    		
	    	];   

	        $this->view("index",array_merge($this->GetDefaultData(),$data));
	}

	public function addCart($id){
		
		if(!isset($_SESSION['name_id']))
		{
			echo "<script> alert('Bạn chưa đăng nhập thành viên'); location.href='http://hoc-php.local/PHP-MVC-02/index.php' </script>";
		}

		
		//chi tiết sản phẩm
		$product = $this->model("ProductModel")->getProductById($id);

		// kiểm tra nếu tồn tại giỏ hàng thì cập nhật giỏ hàng


		//ngược lại nếu chưa tồn tại giỏ hàng thì tạo mới giỏ hàng
		if(!isset($_SESSION['cart'][$id]))
		{
			//tạo mới giỏ hàng
			$_SESSION['cart'][$id]['name'] = $product['name'];
			$_SESSION['cart'][$id]['thumbar'] = $product['thumbar'];
			$_SESSION['cart'][$id]['price'] = (100-$product['sale'])*$product['price']/100;
			$_SESSION['cart'][$id]['qty'] = 1;
			
		}
		else
		{

			$_SESSION['cart'][$id]['qty'] += 1;
		}

		echo "<script> alert('Thêm sản phẩm thành công'); location.href = 'http://hoc-php.local/PHP-MVC-02/Cart/showCart' </script> ";
		//redirectStyle('/Cart/showCart');
	}

	public function removeCart($key){
		$key = intval($key);
	    unset($_SESSION['cart'][$key]);

	    $_SESSION['success'] = "Xoá sản phẩm trong giỏ hàng thành công !";
	    header("location: http://hoc-php.local/PHP-MVC-02/Cart/showCart");
		}

	public function updateCart(){

		$this->view("ajax");
	}

	
}
?>