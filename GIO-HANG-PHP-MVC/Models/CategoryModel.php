<?php
/**
 * Lấy dữ liệu từ bảng Category
 */
class CategoryModel extends DB
{
	function getAll(){
		return $category = $this->fetchAll("category");
	}
	
	function getById($id){
		return $this->fetchID("category", $id);
	}

	function getByHome(){

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


}
?>