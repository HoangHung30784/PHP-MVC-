<?php
// Quản lí thông tin bảng Product
// 
class ProductModel extends DB {

public function getAllProduct(){
	return $product = $this->fetchAll("product");
}

public function getProductList($p=1, $number){ //Lấy danh sách category  có phân trang 	

	$sql = "SELECT product.*,category.name as namecate FROM product LEFT JOIN category on category.id = product.category_id";
	return $productList = $this->fetchJone('product',$sql,$p,$number,true);

}

public function getProductById($id){
	return $productById = $this->fetchID("product",$id);
}

public function checkExistId($id){
	$result = false;
	$DelProduct = $this->fetchID("product",$id);
	if(empty($DelProduct)){ $result = true; }
	return $result;
}


public function deleteProduct($id){
	$result = false;
	$num = $this->delete("product",$id);
	if($num > 0){ $result = true; }
	return $result;
}

public function addNewProduct($data){
	$result = false;
	$id_insert = $this->insert("product",$data);
	if($id_insert>0){ $result = true; }
	return $result;
}

public function editProduct($id,$data){
	$result = false;
	$id_edit = $this->update("product",$data,array("id"=>$id));
	if($id_edit>0){ $result = true; }
	return $result;
}

}
?>