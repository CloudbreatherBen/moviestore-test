<?php
require "config.php";
$ctrl = "Site"; 
if(isset($_GET['mvccontroller'])){
	$ctrl = $_GET['mvccontroller'];
}
$ctrl .= "Controller";
if(!file_exists("controller/{$ctrl}.php")){
	die("Controller does not exist");
} else {
	require_once("controller/{$ctrl}.php");
}
$method = "index";
if(isset($_GET['mvcmethod'])){
	$method = $_GET['mvcmethod'];
}

$controller = new $ctrl;
if(!method_exists($controller,$method)){
	$method="index";
}
$controller->$method();