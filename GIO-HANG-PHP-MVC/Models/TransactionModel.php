<?php
/**
 *  Quản lí thông tin bảng transaction
 */
class TransactionModel extends DB
{
	
	public function insertData($data=[]){
		return $this->insert("transaction",$data);
	}
}
?>