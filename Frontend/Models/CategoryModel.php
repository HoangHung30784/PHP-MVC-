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

	function count_product_byName(){
		$arr = [];
		$category = $this->getAll();

		foreach ($category as $value) {
			$id = $value["id"];
			$sql = "SELECT * FROM product WHERE category_id = $id";
			$arr[$value['name']] = count($this->fetchsql($sql));
		}

		return  $arr;
		
	}


}
?>