<?php
// Quản lí thông tin bảng Category
// 
class CategoryModel extends DB {

public function getAllCategory(){
	return $Category = $this->fetchAll("category");
}

public function getCategoryList($p=1, $number){ //Lấy danh sách category  có phân trang 	

			$sql = "SELECT category.* FROM category";
			
			return $categoryList = $this->fetchJone('category',$sql,$p,$number,true);
		}

public function checkCategoryNameExist($name){
	$result = false;
	$isset = $this->fetchOne("category","name = '".$name."'");
	if(count($isset)>0){
		$result = true;
	}
	return $result;
}

public function addNewCategory($data){
	$result = false;
	$id_insert = $this->insert("category",$data);
	if($id_insert>0)
    {
    	$result = true;
    }  

    return $result;
}

public function getCategoryById($id){
	return $CategoryById = $this->fetchID("category",$id);
}

public function checkExistId($id){
	$result = false;
	$DelCategory = $this->fetchID("category",$id);
	if(empty($DelCategory)){ $result = true; }
	return $result;
}

public function checkCategoryEmptyProduct($id){
	$result = false;
	$is_product = $this->fetchOne("product","category_id = $id ");
	if($is_product !== NULL)	{ $result = true; }
	return $result;
}

public function deleteCategory($id){
	$result = false;
	$num = $this->delete("category",$id);
	if($num > 0){ $result = true; }
	return $result;
}



public function editCategory($id, $data){
	$result = false;
	$id_update = $this->update("category",$data,array("id"=>$id));
	if($id_update>0){ $result = true; }
	return $result;
}

}
?>