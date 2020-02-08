<?php
/**
 * Quản lí thông tin Đơn hàng
 */
class DonHangController extends Controller
{
	
	public function thanhtoan(){

			$users_id = $_SESSION['name_id'];

			$user = $this->model("UserModel")->getUserById($users_id);

					if ($_SERVER["REQUEST_METHOD"] == "POST")
					{
						$data1 = 
						[
							'amount' => $_SESSION['total'],
							'users_id' => $_SESSION['name_id'],
							'note' => postInput('note')
							
						];



						$id_trans = $this->model("TransactionModel")->insertData($data1);
						if($id_trans >0)
						{
							foreach($_SESSION['cart'] as $key => $value)
							{
								$data2 = 
								[
									'transaction_id' 	=>$id_trans,
									'product_id'		=>$key,
									'qty'				=>$value['qty'],
									'price'				=>$value['price']
								];
								//_debug($data2);
								$id_insert = $this->model("DonHangModel")->insertData($data2);
							}


							 unset($_SESSION['cart']);
							 unset($_SESSION['total']);

							$_SESSION['success'] = "Lưu thông tin đơn hàng hàng thành công! Chúng tôi sẽ liên hệ đến bạn trong thời gian sớm nhất.";
							header("location: http://hoc-php.local/PHP-MVC-02/Home/thongbao");
						}
					}
		$data=[
	    		"show_page" =>"thanhtoan",
	    		"user_thanhtoan" => $user
	    		
	    	];   

	        $this->view("/frontend/index",array_merge($this->GetDefaultData(),$data));
	}
}
?>