<?php
/**
 * Quản lí bảng user
 */
class UserModel extends DB
{
	public function getUserList($p=1,$number){

		$sql = "SELECT users.* FROM users ORDER BY ID DESC";
		return $userList = $this->fetchJone('users',$sql,$p,$number,true);
	}

	public function checkExistUser($id){
		$result = false;
		$Delusers = $this->fetchID("users",$id);
		if(empty($Delusers)){ $result = true; }
		return $result;
	}

	public function deleteUser($id){
		$result = false;
		$num = $this->delete("users",$id);
		if($num > 0) { $result = true; }

		return $result;
	}
	
}

?>