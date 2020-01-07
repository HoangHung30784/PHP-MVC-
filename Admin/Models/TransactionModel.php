<?php

class TransactionModel extends DB {

	public function getTransactionList($p=1,$number){
		$sql = "SELECT transaction.*, users.name as nameuser , users.phone as phoneuser FROM transaction LEFT JOIN users ON users.id = transaction.users_id ORDER BY ID DESC";
		
		return	$transaction = $this->fetchJone('transaction',$sql,$p,$number,true);
	}

	public function getTransactionById($id){
		return $transaction = $this->fetchID("transaction",$id);
	}

	public function checkExistTransactionId($id){
		$result = false;
		if($this->getTransactionById($id) > 0) { $result = true;}
		return $result;
	}

	public function updateTransactionStatus($id){
			$result = false;
		 	$status = 1;
		 	$Edittransaction = $this->getTransactionById($id);
		    if($Edittransaction['status']==0){$status=1;}else{$status=0;}
		    
		    $update = $this->update("transaction",array("status"=>$status),array("id"=>$id));


		    		if($update>0)
	                {
	                       $result = true;

	                        $sql = "SELECT product_id,qty FROM donhang WHERE transaction_id = $id";
	                        $order = $this->fetchsql($sql);

	                        foreach ($order as $item) {
	                        	$idproduct = intval($item['product_id']);
	                        	$product = $this->fetchID('product',$idproduct);
	                        	$number = $product['soluong'] - $item['qty'];
	                        	$update_pro = $this->update("product",array("soluong"=>$number,"pay"=>$product["pay"]+1),array("id"=>$idproduct));
	                        	
	                        }
		                           
                    }
            return $result;
	}

	public function deleteTransaction($id){
		$result = false;
		$number = $this->delete("transaction", $id);
		if ( $number > 0){ $result = true;	}
		return $result;
	}
}

?>