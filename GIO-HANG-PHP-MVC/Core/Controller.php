<?php
class Controller{

    public function model($model){
        require_once "./Models/".$model.".php";
        return new $model;
    }

    public function view($view, $data=[]){
        require_once "./Views/".$view.".php";
    }

	
	// Lấy dữ liệu cần hiển thị mặc định
     
    public function GetDefaultData(){
        
        
        $Category = $this->model("CategoryModel")->getByHome();
                
        $NewProduct = $this->model("ProductModel")->getNewProduct(4);
        $PayProduct = $this->model("ProductModel")->getPayProduct(4);

        $getProductByAllCate = $this->model("ProductModel")->getProductByAllCate();

        return $defaultData =  [
            
            "getProductByAllCate" => $getProductByAllCate,
            "Category" => $Category,
            "NewProduct" => $NewProduct,
            "PayProduct" =>$PayProduct,
            "show_page" =>'Home'
            
       ];

    }
	 
    
    // Must have actionDefault(); Đây là action default
    public function actionDefault(){
    	    $this->view("/frontend/index", $this->GetDefaultData());

    }
	

}
?>