<?php
/*
* Lấy thông tin từ bảng product
*/
class ProductModel extends DB{

	public function getNewProduct($soluong){

	            $sqlNewProduct = "SELECT * FROM product WHERE 1 ORDER BY ID DESC LIMIT $soluong";
				
				return	$NewProduct = $this->fetchsql($sqlNewProduct);
			
        	}	

	public function getPayProduct($soluong){

	            $sqlPay = "SELECT * FROM product WHERE 1 ORDER BY PAY DESC LIMIT $soluong";
				return 	$PayProduct = $this->fetchsql($sqlPay);
				
        	}	
    

	
	public function getProductByAllCate(){

	            $sqlHomecate = "SELECT name, id FROM category WHERE home = 1 ORDER BY updated_at";
				$categoryHome = $this->fetchsql($sqlHomecate);

				$data = [];
				
				foreach ($categoryHome as $item) {
				   $cateId = intval($item['id']);
				   $sql = "SELECT * FROM product WHERE category_id = $cateId";
				   $productHome = $this->fetchsql($sql);
				   				   
				   $data[$item['name']] = $productHome;
				  
				}
				return $data;
        	}	

    public function getProductByCate($id, $p, $number){ //Lấy sản phẩm theo id danh mục, có phân trang theo số lượng sản phẩm/trang
                	
    		$sql = "SELECT * FROM product WHERE category_id = $id";
    		$total = count($this->fetchsql($sql));
			
			return $ProductBycate = $this->fetchJones('product',$sql,$total,$p,$number,true);
		}

	public function getProductById($id){

		return $this->fetchID("product",$id);
	}

	public function getRelatedProduct($id){

		$cate_id = $this->getProductById($id)['category_id'];

		$sql = "SELECT * FROM product WHERE category_id = $cate_id ORDER BY ID DESC LIMIT 4";

		return $sanphamkemtheo = $this->fetchsql($sql);
	}	
}
?>


