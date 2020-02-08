<?php
/**
 * 
 */
class FrontendController extends Controller
{
	
	public function frontend($a,$b){
		$data =[
			"hieu" => $a - $b
		];

		$this->view("Frontend/index", $data);
	}
}
?>