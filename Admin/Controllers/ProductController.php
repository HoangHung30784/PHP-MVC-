<?php
class ProductController extends Controller {

	public function showProductList($p=1){

		$number = 10;
		$productList = $this->model("ProductModel")->getProductList($p,$number);

		$sotrang = $productList['page'];
   		unset($productList['page']);

		$data = [
			"open" => "product",
			"show_page" => "product-index",
			"productList" => $productList,
			"page" => $p,
			"sotrang" => $sotrang,
			"number" => $number
		];

		$this->view("index",$data);
	}

	public function deleteProduct($id){
		$deleteProduct = $this->model("ProductModel")->checkExistId($id);
		if($deleteProduct)
		{
			$_SESSION['error'] = 'Dữ liệu không tồn tại';
			redirect("/admin/product/showProductList");
		}

		$num = $this->model("ProductModel")->deleteProduct($id);
		if($num)
		{
			$_SESSION["success"] = "Xoá thành công";
			redirect("/admin/product/showProductList");
		}
		else
		{
			$_SESSION["error"] = "Xoá thất bại";
			redirect("/admin/product/showProductList");
		}
	}

	public function addNewProduct(){
		 if ($_SERVER["REQUEST_METHOD"] == "POST")
		    {
		    	$data1 = 
		    	[
		    		"name" => postInput("name"),
		    		"slug" => to_slug(postInput("name")),
		            "category_id" => postInput("category_id"),
		            "price" =>postInput("price"),
		            "soluong" =>postInput("soluong"),
		            "sale" =>postInput("sale"),
		            "content"=>postInput("content")
		    	];

		    	$error = [];

		    	if(postInput("name") == '')
		    	{
		    		$error['name'] = "Bạn chưa nhập tên sản phẩm";
		    	}

		        if(postInput("category_id") == '')
		        {
		            $error['category_id'] = "Bạn chưa nhập tên danh mục sản phẩm";
		        }

		        if(postInput("price") == '')
		        {
		            $error['price'] = "Bạn chưa nhập giá sản phẩm";
		        }

		        if(postInput("soluong") == '')
		        {
		            $error['soluong'] = "Bạn chưa nhập số lượng sản phẩm";
		        }

		        if(postInput("content") == '')
		        {
		            $error['content'] = "Bạn chưa nhập nội dung sản phẩm";
		        }

		         if(!isset($_FILES['thumbar']))
		        {
		            $error['thumbar'] = "Bạn chưa chọn hình ảnh sản phẩm";
		        }

		    	if(empty($error))
		    	{
		            if(isset($_FILES['thumbar']))
		            {
		                $file_name = $_FILES['thumbar']['name'];
		                $file_tmp = $_FILES['thumbar']['tmp_name'];
		                $file_type = $_FILES['thumbar']['type'];
		                $file_error = $_FILES['thumbar']['error'];

		                if($file_error == 0)
		                {
		                    $path = ROOT."product/";
		                    $data1['thumbar'] = $file_name;
		                }

		                $id_insert = $this->model("ProductModel")->addNewProduct($data1);
		                if($id_insert)
		                {
		                    move_uploaded_file($file_tmp,$path.$file_name);
		                    $_SESSION["success"] = "Thêm mới thành công";
		                    redirect("/admin/product/showProductList");
		                }
		                else
		                {
		                    $_SESSION["error"] = "Thêm mới thất bại";
		                    redirect("/admin/product/showProductList");
		                }
		            }
		        }
		    		
		    }
		$category = $this->model("CategoryModel")->getAllCategory();

		$data = [
			"open" => "Product",
			"show_page" => "product-add",
			"category"=>$category

		];

		$this->view("index", $data);
	}

	public function editProduct($id,$p){
		$category = $this->model("CategoryModel")->getAllCategory();
		$EditProduct = $this->model("ProductModel")->getProductById($id);
		if(empty($EditProduct)){
	    	$_SESSION['error'] = "Dữ liệu không tồn tại";
	    	 redirect("/admin/product/showProductList/{$p}");
   		 }

		if ($_SERVER["REQUEST_METHOD"] == "POST")
		    {
		    	$data1 = 
		    	[
		    		"name" => postInput("name"),
		    		"slug" => to_slug(postInput("name")),
		            "category_id" => postInput("category_id"),
		            "price" =>postInput("price"),
		            "soluong" =>postInput("soluong"),
		            "sale" =>postInput("sale"),
		            "content"=>postInput("content")
		    	];

		    	$error = [];

		    	if(postInput("name") == '')
		    	{
		    		$error['name'] = "Bạn chưa nhập tên sản phẩm";
		    	}

		        if(postInput("category_id") == '')
		        {
		            $error['category_id'] = "Bạn chưa nhập tên danh mục sản phẩm";
		        }

		        if(postInput("price") == '')
		        {
		            $error['price'] = "Bạn chưa nhập giá sản phẩm";
		        }

		        if(postInput("soluong") == '')
		        {
		            $error['soluong'] = "Bạn chưa nhập số lượng sản phẩm";
		        }

		        if(postInput("content") == '')
		        {
		            $error['content'] = "Bạn chưa nhập nội dung sản phẩm";
		        }

		        
		    	if(empty($error))
		    	{
		            if(isset($_FILES['thumbar']))
		            {
		                $file_name = $_FILES['thumbar']['name'];
		                $file_tmp = $_FILES['thumbar']['tmp_name'];
		                $file_type = $_FILES['thumbar']['type'];
		                $file_error = $_FILES['thumbar']['error'];

		                if($file_error == 0)
		                {
		                    $path = ROOT."product/";
		                    $data1['thumbar'] = $file_name;
		                }

		                $update = $this->model("ProductModel")->editProduct($id,$data1);
		                if($update)
		                {
		                    move_uploaded_file($file_tmp,$path.$file_name);
		                    $_SESSION["success"] = "Sửa thành công";
		                    redirect("/admin/product/showProductList/{$p}");
		                }
		                else
		                {
		                    $_SESSION["error"] = "Sửa thất bại";
		                    redirect("/admin/product/showProductList/{$p}");
		                }
		            }
		        }
		    		
		    	}

		$data = [
			"open" => "Product",
			"show_page" => "product-edit",
			"category" => $category,
			"Editproduct" => $EditProduct
		];
		$this->view("index", $data);

	}
} 
?>