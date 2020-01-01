<?php
class Controller{

    public function model($model){
        require_once "./Frontend/Models/".$model.".php";
        return new $model;
    }

    public function view($view, $data=[]){
        require_once "./Frontend/Views/".$view.".php";
    }

	
	 // Lấy dữ liệu cần hiển thị mặc định
	 
    public function GetDefaultData(){
        
    	
        $Category = $this->model("CategoryModel")->getAll();
        $count_product_byName = $this->model("CategoryModel")->count_product_byName();
        
        $NewProduct = $this->model("ProductModel")->getNewProduct(4);
        $PayProduct = $this->model("ProductModel")->getPayProduct(4);

        $getProductByAllCate = $this->model("ProductModel")->getProductByAllCate();

        return $defaultData =  [
            
            "getProductByAllCate" => $getProductByAllCate,
            "Category" => $Category,
            "total_product_byName" => $count_product_byName,
            "NewProduct" => $NewProduct,
            "PayProduct" =>$PayProduct,
            "show_page" =>'Home'
            
       ];

    }

    // Must have SayHi(); Đây là action default
    public function SayHi(){
    	    $this->view("index",$this->GetDefaultData());

    }
	   
}
?>