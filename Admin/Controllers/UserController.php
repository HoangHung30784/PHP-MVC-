<?php

class UserController extends Controller{

	public function showUserList($p=1){
		$number = 10;
		$userList = $this->model("UserModel")->getUserList($p,$number);
		$sotrang=$userList["page"];
		unset($userList["page"]);

		$data =[
			"open"=>"user",
			"show_page"=>"user-index",
			"userList"=>$userList,
			"sotrang"=>$sotrang,
			"page"=>$p,
			"number" => $number
		];

		$this->view("index",$data);
	}

	public function deleteUser($id, $p){
		if($this->model("UserModel")->checkExistUser($id)){
			$_SESSION['error'] = 'Dữ liệu không tồn tại';
			redirect("/admin/User/showUserList/{$p}");
		}

		if($this->model("UserModel")->deleteUser($id)){
			unset($_SESSION['name_user']);
			unset($_SESSION['name_id']);
			$_SESSION["success"] = "Xoá thành công";
			redirect("/admin/User/showUserList/{$p}");
		}else{
			$_SESSION["error"] = "Xoá thất bại";
			redirect("/admin/User/showUserList/{$p}");
		}
	}
}
?>