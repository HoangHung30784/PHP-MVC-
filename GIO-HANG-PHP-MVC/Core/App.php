<?php
class App{

    protected $controller="HomeController";
    protected $action="actionDefault";
    protected $params=[];

    function __construct(){
 
        $arr = $this->UrlProcess();// lấy địa chỉ trên thanh địa chỉ lưu vào mảng $arr, được cắt theo cấu trúc: controller/action/prams
        
 		if($arr[0] === "admin" ){
		 			// Controller
		        if( file_exists("./Controllers/Admin/".$arr[1]."Controller.php") ){
		            $this->controller = $arr[1]."Controller";
		            unset($arr[0]);
		            unset($arr[1]);
		        }
		        require_once "./Controllers/Admin/". $this->controller .".php";
		        $this->controller = new $this->controller;

		        // Action
		        if(isset($arr[2])){
		            if( method_exists( $this->controller , $arr[2]) ){
		                $this->action = $arr[2];
		            }
		            unset($arr[2]);
		        }
		}else{
		    	// Controller
		        if( file_exists("./Controllers/Frontend/".$arr[0]."Controller.php") ){
		            $this->controller = $arr[0]."Controller";
		            unset($arr[0]);
		        }
		        require_once "./Controllers/Frontend/". $this->controller .".php";
		        $this->controller = new $this->controller;

		        // Action
		        if(isset($arr[1])){
		            if( method_exists( $this->controller , $arr[1]) ){
		                $this->action = $arr[1];
		            }
		            unset($arr[1]);
		        }
		}


        // Params
        $this->params = $arr?array_values($arr):[];

        call_user_func_array([$this->controller, $this->action], $this->params );

    }

    function UrlProcess(){
        if( isset($_GET["url"]) ){
            return explode("/", filter_var(trim($_GET["url"], "/")));
        }
    }

    //// Các hàm được dùng
    

}
?>