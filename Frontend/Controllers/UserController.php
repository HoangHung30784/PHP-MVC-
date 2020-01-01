<?php
/**
 * Quản lí việc login, logout, đăng kí thông tin User
 */
class UserController extends Controller
{
	
	public function logOut(){
		
		unset($_SESSION['name_user']);
		unset($_SESSION['name_id']);

		$data=[
	    		"show_page" =>"Home"
	    	];   

	        $this->view("index",array_merge($this->GetDefaultData(),$data));
	}

	public function login(){

		$info = 
    	[
    		
    		"email" => '',
    		"password"=>''
    		
    	];

    	$error = [];

		 if ($_SERVER["REQUEST_METHOD"] == "POST")
		    {
		    	$info = 
		    	[
		    		
		    		"email" => postInput("email"),
		    		"password"=>postInput("password")
		    		
		    	];

		    	

		    	

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

		    		if( $this->model("UserModel")->checkEmailAndPass($info['email'],$info['password']))
		    		{
		    			//đăng nhập thành công
		    			$user = $this->model("UserModel")->getUserByEmailAndPass($info['email'],$info['password']);
		    			$_SESSION['name_user'] = $user['name'];
		    			$_SESSION['name_id'] = $user['id'];
		    			echo " <script> alert('Đăng nhập thành công'); location.href='index.php'; </script>";
		    		}
		    		else
		    		{
		    			//đăng nhập thất bại
		    			$_SESSION['error'] = "Đăng nhập thất bại";
		    		}
		    	}
			}

			$data=[
		    		
		    		"error" => $error,
		    		"show_page" =>"login"
		    		
		    	];   

		        $this->view("index",array_merge($this->GetDefaultData(),$data));
	}

	public function dangki(){

					$info = 
			    	[
			    		"name" => '',
			    		"email" => '',
			    		"password"=>'',
			    		"phone"=>'',
			    		"address"=>''
			    	];

			    	$error = [];

			 if ($_SERVER["REQUEST_METHOD"] == "POST")
			    {
			    	$info = 
			    	[
			    		"name" => postInput("name"),
			    		"email" => postInput("email"),
			    		"password"=>postInput("password"),
			    		"phone"=>postInput("phone"),
			    		"address"=>postInput("address")
			    	];

			    	
			    	if(postInput("name") == '')
			    	{
			    		$error['name'] = "Bạn chưa nhập tên thành viên";
			    	}

			        if(postInput("email") == '')
			        {
			            $error['email'] = "Bạn chưa nhập email";
			        }
			        else {
			        	 if($this->model("UserModel")->checkEmail($info["email"])){

			    			$error['email'] = "Địa chỉ email đã tồn tại, mời bạn nhập địa chỉ khác";
			    		}
			        }

			        if(postInput("password") == '')
			        {
			            $error['password'] = "Bạn chưa nhập mật khẩu";
			        }

			        if(postInput("phone") == '')
			        {
			            $error['phone'] = "Bạn chưa nhập số điện thoại";
			        }

			        if(postInput("address") == '')
			        {
			            $error['address'] = "Bạn chưa nhập địa chỉ";
			        }

			       	if(empty($error))
			    	{
			                $id_insert = $this->model("UserModel")->insertData($info);
			                if($id_insert>0)
			                {
			                   $_SESSION["success"] = "Bạn đã đăng kí thành công! Mời bạn đăng nhập vào tài khoản";
			                    redirect("/User/login");
			                }
			                else
			                {
			                    $_SESSION["error"] = "Đăng ký thất bại";
			                    redirect("/User");
			                }
			         }
			        
			    }

					$data=[
				    		
				    		"info" => $info,
				    		"error" => $error,
				    		"show_page" =>"dangki"
				    		
				    	];   

				        $this->view("index",array_merge($this->GetDefaultData(),$data));
			}
}
?>