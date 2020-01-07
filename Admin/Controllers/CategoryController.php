<?php

// http://hoc-php/php-mvc-02/Admin/

class CategoryController extends Controller{

	public function showCategoryList($p=1){
		$number = 2; // Số dòng trên 1 trang

		$categoryList = $this->model('CategoryModel')->getCategoryList($p, $number);

		$sotrang = $categoryList['page'];
		unset($categoryList['page']);
		   

		$data=[
				"open" => "category",
	    		"show_page" =>"category-index",
	    		"categoryList" => $categoryList,
	    		"sotrang" => $sotrang,
	    		"page"=>$p,
	    		"number" => $number
	    	];   

	        $this->view("index",$data);
	}

	public function addNewCategory(){

		 if ($_SERVER["REQUEST_METHOD"] == "POST")
			    {
			    	$data = 
			    	[
			    		"name" => postInput("name"),
			    		"slug" => to_slug(postInput("name"))
			    	];

			    	$error = [];

			    	if(postInput("name") == '')
			    	{
			    		$error['name'] = "Bạn chưa nhập tên danh mục";
			    	}

			    	if(empty($error))
			    	{
			           $result = $this->model("CategoryModel")->checkCategoryNameExist($data["name"]);
			           if($result)
			            {
			                $_SESSION['error'] = "Tên danh mục đã tồn tại";
			            }
			            else
			            {
			                $insert_result = $this->model("CategoryModel")->addNewCategory($data);

			                if( $insert_result)
			                {
			                    $_SESSION["success"] = "Thêm mới thành công";
			                    redirect("/admin/category/showCategoryList");
			                }
			                else
			                {
			                    $_SESSION["error"] = "Thêm mới thất bại";
			                }
			            }
			    		
			    	}
			    }


		$data = [
			"show_page" => "category-add"

		];

		$this->view("index", $data);
	}

	public function deleteCategory($id){

		// Kiểm tra $id có tồn tại trong bảng category không
		$checkExistId = $this->model("CategoryModel")->checkExistId($id);
		if($checkExistId)
		{
			$_SESSION['error'] = 'Dữ liệu không tồn tại';
			redirect("/admin/category/showCategoryList");
		}

		// Kiểm tra xem danh mục ứng với $id truyền vào có tồn tại sản phẩm nào không
		$checkCategoryEmptyProduct = $this->model("CategoryModel")->checkCategoryEmptyProduct($id);
		if($checkCategoryEmptyProduct)
		{
			$_SESSION["error"] = "Không thể xoá danh mục đang có sản phẩm";
			redirect("/admin/category/showCategoryList");
		}

		// Xoá danh mục và trả về kết quả
		$num = $this->model("CategoryModel")->deleteCategory($id);
		if($num > 0)
		{
			$_SESSION["success"] = "Xoá thành công";
			redirect("/admin/category/showCategoryList");
		}
		else
		{
			$_SESSION["error"] = "Xoá thất bại";
			redirect("/admin/category/showCategoryList");
		}
	}

	public function editCategory($id){

		// Kiểm tra $id có tồn tại trong bảng category không
		$checkExistId = $this->model("CategoryModel")->checkExistId($id);
		if($checkExistId)
		{
			$_SESSION['error'] = 'Dữ liệu không tồn tại';
			redirect("/admin/category/showCategoryList");
		}

		$CategoryById = $this->model("CategoryModel")->getCategoryById($id); 

		// Kiểm tra xem có submit và xử lý
		 if ($_SERVER["REQUEST_METHOD"] == "POST")
			    {
			    	$data1 = 
			    	[
			    		"name" => postInput("name"),
			    		"slug" => to_slug(postInput("name"))
			    	];

			    	$error = [];

			    	if(postInput("name") == '')
			    	{
			    		$error['name'] = "Bạn chưa nhập tên danh mục";
			    	}

			    	if(empty($error))
			    	{
			            if($CategoryById['name'] != $data1['name'])
			            {
			                    $isset = $this->model("CategoryModel")->checkCategoryNameExist($id);
			                if($isset)
			                {
			                    $_SESSION['error'] = "Tên danh mục ".$data1['name']." đã tồn tại";
			                }
			                else
			                {
			                    $id_update = $this->model("CategoryModel")->editCategory($id, $data1);

			                    if($id_update)
			                    {
			                        $_SESSION["success"] = "Sửa thành công";
			                        redirect("/admin/category/showCategoryList");
			                    }
			                    else
			                    {
			                        $_SESSION["error"] = "Dữ liệu không thay đổi";
			                        redirect("/admin/category/showCategoryList");
			                    }
			                }
			            }else
			            {
			                $id_update = $this->model("CategoryModel")->editCategory($id, $data1);

			                    if($id_update)
			                    {
			                        $_SESSION["success"] = "Sửa thành công";
			                        redirect("/admin/category/showCategoryList");
			                    }
			                    else
			                    {
			                        $_SESSION["error"] = "Dữ liệu không thay đổi";
			                        redirect("/admin/category/showCategoryList");
			                    }
			            }
			    		
			    	}
			    }

			$data = [
				"open" => "category",
				"show_page"=>"category-edit",
				"EditCategory"=>$CategoryById
			];    
			$this->view("index",$data);    
	}

	public function updateHome($id,$p){
		echo $id + $p;
			// Kiểm tra $id có tồn tại trong bảng category không
			$checkExistId = $this->model("CategoryModel")->checkExistId($id);
			if($checkExistId)
			{
				$_SESSION['error'] = 'Dữ liệu không tồn tại';
				redirect("/admin/category/showCategoryList");
			}
			$CategoryById = $this->model("CategoryModel")->getCategoryById($id);
			$home = $CategoryById['home']==0 ? 1: 0;
			$data1 = [
				"home"=>$home
			];
			$id_update = $this->model("CategoryModel")->editCategory($id, $data1);

            if($id_update)
            {
                $_SESSION["success"] = "Sửa thành công";
                redirect("/admin/category/showCategoryList/{$p}");
            }
            else
            {
                $_SESSION["error"] = "Dữ liệu không thay đổi";
                redirect("/admin/category/showCategoryList");
            }

	}
}
?>