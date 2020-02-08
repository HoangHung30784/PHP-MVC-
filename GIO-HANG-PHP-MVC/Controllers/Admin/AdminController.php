<?php
/**
 * 
 */
class AdminController extends Controller
{
	
	public function admin($a,$b){
		$data =[
			"tong" => $a + $b
		];

		$this->view("Admin/index", $data);
	}
}
?>