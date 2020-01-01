<?php
/**
 * Get, Insert, Update, Delete thông tin từ bảng người dùng
 */
class UserModel extends DB
{
	public function getUserbyEmail($email=''){
		return $this->fetchOne("users","email = '".$email."'");
	}

	public function checkEmail($email=''){
		$result = false;
		if ($this->getUserbyEmail($email) != NULL ){
			$result = true;
		}
		return $result;
	}

	public function checkEmailAndPass($email='',$pass=''){
		$result = false;
		if ($this->getUserByEmailAndPass($email,$pass) != NULL ){
			$result = true;
		}
		return $result;
	}

	public function getUserByEmailAndPass($email='',$pass=''){
		return $this->fetchOne("users","email = '".$email."'AND password ='".$pass."'");
	}

	public function insertData($data=[]){
		return $this->insert("users",$data);
	}

	public function getUserById($id){
		return $this->fetchID("users", $id);
	}
}
?>