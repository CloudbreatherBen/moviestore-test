<?php

abstract class Controller {
		public function loadView($view,$params=array()){
		foreach($params as $k=>$param){
			$this->$k = $param;
		}
		
		include "view/{$view}.php";
	}
	 
	public function index(){
		echo "Page does not exist";
	}
	
}