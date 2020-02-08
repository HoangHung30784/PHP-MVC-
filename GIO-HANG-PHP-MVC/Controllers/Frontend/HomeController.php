<?php

// http://hoc-php/php-mvc-02/Home/ShowProductByCate/$id

class HomeController extends Controller{

	 public function thongbao(){
	 	$data=[
	    		"show_page" =>"thongbao"
	  	    ];   

	    $this->view("/frontend/index",array_merge($this->GetDefaultData(),$data));
	 }
}
?>