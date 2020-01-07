<?php
// Quản lí thông tin bảng Admin
// 
class AdminModel extends DB {

public function getAdminList($p=1, $number){ //Lấy danh sách admin có phân trang
                	
			$sql = "SELECT admin.* FROM admin ORDER BY ID DESC";
			
			return $adminList = $this->fetchJone('admin',$sql,$p,$number,true);
		}
public function deleteAdmin($id){
		$result = false;
		$id = intval($id);
		$num = $this->delete("admin",$id);
			if($num > 0){$result = true;}
		return $result;

}

public function checkExistAdmin($email,$pass){
	return $is_check = $this->fetchOne("admin","email = '".$email."'AND password ='".$pass."'");
}


}
?>