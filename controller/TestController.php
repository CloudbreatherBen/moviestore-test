<?php
class TestController extends Controller {
	function index(){
		$this->loadView("top");
		$this->loadView("home");
		$this->loadView("footer");
	}
	function movies(){
		$this->loadView("top");
		echo "No movies here";
		$this->loadView("footer");
	}
	function help(){
		$this->loadView("top");
		$this->loadView("help");
		$this->loadView("footer");
	}
}