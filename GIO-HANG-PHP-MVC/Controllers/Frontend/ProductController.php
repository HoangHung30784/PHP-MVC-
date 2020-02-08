<?php
/**
 * Quản lí thông tin product
 */
class ProductController extends Controller
{
	
	public function ShowProductByCate($id,$p=1){
	    	$id = intval($id);
	    	$p = intval($p);
	    	$number = 4; // số sản phẩm trên một trang

	    	$ProductByCate = $this->model("ProductModel")->getProductByCate($id, $p, $number);
	    	$getCateById = $this->model("CategoryModel")->getbyId($id);

	    	
	    	$data=[
	    		"show_page" =>"productByCate",
	    		"id_product" => $id,
	    		"ProductByCate" => $ProductByCate,
	    		"getCateById"=>$getCateById,
	    		"page"=>$p
	    	];   

	        $this->view("/frontend/index",array_merge($this->GetDefaultData(),$data));

	  }

	public function detail($id){

	  		$id = intval($id);

			//chi tiết sản phẩm
			$product = $this->model("ProductModel")->getProductById($id);

			//sản phẩm kèm theo

			$sanphamkemtheo = $this->model("ProductModel")->getRelatedProduct($id);

			$data = [

				"id_sanpham" => $id,
				"product_detail" => $product,
				"sanphamkemtheo"=>$sanphamkemtheo,
				"show_page"=> "Detail"
			];

			$this->view("/frontend/index",array_merge($this->GetDefaultData(),$data));
	}
}
?>