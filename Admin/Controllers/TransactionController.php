<?php

class TransactionController extends Controller {

	public function showTransactionList($p=1){
		$number = 10;
		$transactionList = $this->model("TransactionModel")->getTransactionList($p,$number);

		$sotrang = $transactionList["page"];
		unset($transactionList["page"]);

		$data = [
			"open" => "transaction",
			"show_page" => "transaction-index",
			"transactionList" => $transactionList,
			"number" => $number,
			"page"=>$p,
			"sotrang"=>$sotrang
		];

		$this->view("index",$data);
	}

	public function editTransactionStatus($id,$p){
		$Edittransaction = $this->model("TransactionModel")->getTransactionById($id);
		    if(empty($Edittransaction))
		    {
		    	$_SESSION['error'] = 'Dữ liệu không tồn tại';
		    	redirect("/admin/transaction/showTransactionList/{$p}");
		    }

		    if($Edittransaction['status']==1)
		    {
		    	$_SESSION['error'] = 'Đơn hàng đã được xử lý rồi';
		    	redirect("/admin/transaction/showTransactionList/{$p}");
		    }

		$result = $this->model("TransactionModel")->updateTransactionStatus($id);

		   if($result){
		   		 $_SESSION["success"] = "Cập nhật thành công";
		         redirect("/admin/transaction/showTransactionList/{$p}");
		   }else{
		   			$_SESSION["error"] = "Dữ liệu không thay đổi";
		            redirect("/admin/transaction/showTransactionList/{$p}");
		   }
		                                 
	}


	public function deleteTransaction($id){
		$checkTransactionId = $this->model("TransactionModel")->checkExistTransactionId($id);
		
		if(!$checkTransactionId){
			$_SESSION['error'] = 'Đơn hàng không tồn tại';
			redirect("/admin/transaction/showTransactionList");
		}

		$result = $this->model("TransactionModel")->deleteTransaction($id);
		if($result){ 
			$_SESSION["success"] = "Xoá thành công";
		    redirect("/admin/transaction/showTransactionList");
		}
	}
}

?>