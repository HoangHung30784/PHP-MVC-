<?php

// http://hoc-php/php-mvc-02/Admin/

class AdminController extends Controller{

	public function showAdminList($p=1){
		$number = 5; // Số dòng trên 1 trang
		$adminList = $this->model('AdminModel')->getAdminList($p, $number);

		$sotrang = $adminList["page"];
		unset($adminList['page']);

		$data=[
				"open" => "admin",
	    		"show_page" =>"admin-index",
	    		"adminList" => $adminList,
	    		"page"=>$p,
	    		"sotrang" => $sotrang,
	    		"number"=>$number
	    	];   

	        $this->view("index",$data);
	}

	public function deleteAdmin($id){
		$result = $this->model('AdminModel')->deleteAdmin($id);
		if($result)
			{
				$_SESSION["success"] = "Xoá thành công";
			}
		else
			{
				$_SESSION["error"] = "Xoá thất bại";
			
			}
	
		redirect("/admin/admin/showAdminList");
	}

	public function logout(){
		session_start();
		unset($_SESSION['admin_name']);
		unset($_SESSION['admin_id']);

		redirect("/admin/admin/login");
	}

	public function login(){

			
			$error = [];
			$data1 = 
			    	[
			    		
			    		"email" => '',
			    		"password"=>''
			    		
			    	];

			if ($_SERVER["REQUEST_METHOD"] == "POST")
			    {
			    	$data1 = 
			    	[
			    		
			    		"email" => postInput("email"),
			    		"password"=>postInput("password")
			    		
			    	];

			    	$error = [];

			    	

			        if(postInput("email") == '')
			        {
			            $error['email'] = "Bạn chưa nhập email";
			        }

			         if(postInput("password") == '')
			        {
			            $error['password'] = "Bạn chưa nhập mật khẩu";
			        }

			        if(empty($error))
			    	{

			    		$is_check = $this->model("AdminModel")->checkExistAdmin($data1['email'],$data1['password']);
			    		if($is_check !=NULL)
			    		{
			    			//đăng nhập thành công
			    			$_SESSION['admin_name'] = $is_check['name'];
			    			$_SESSION['admin_id'] = $is_check['id'];
			    			echo " <script> alert('Đăng nhập thành công'); </script>";
			    			redirect("/admin/admin");

			    		}
			    		else
			    		{
			    			//đăng nhập thất bại
			    			$_SESSION['error'] = "Đăng nhập thất bại";
			    		}
			    	}
			}

			$this->view("login");
	}
}
?>