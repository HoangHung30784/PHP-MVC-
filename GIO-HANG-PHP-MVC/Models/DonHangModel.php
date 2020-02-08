<?php
/**
 * Quản lí thông tin bảng đơn hàng
 */
class DonHangModel extends DB
{
	
	public function insertData($data=[]){
		return $this->insert("donhang",$data);
	}
}
?>