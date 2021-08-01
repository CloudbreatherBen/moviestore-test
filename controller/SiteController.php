<?php
class SiteController extends Controller {
	
	function getCategories(){
		$db = Database::getConnection();
		$res = $db->query("select * from categories");
		$cats = [];
		while($cat = $res->fetch(PDO::FETCH_OBJ)){
			$cats [] = $cat;
		}
		return $cats;
	}
	
	function getMovies($cat){
		$db = Database::getConnection();
		$filter = $cat == 0 ? "" : " where category = {$cat}";
		$res = $db->query("select * from movies{$filter}");
		$movies = [];
		while($movie = $res->fetch(PDO::FETCH_OBJ)){
			$movies [] = $movie;
		}
		return $movies;
	}
	
	function index(){
			
		$this->loadView("top",["categories"=>$this->getCategories()]);
		$this->loadView("home");
		$this->loadView("footer");
	}
	function movies(){
		$this->loadView("top",["categories"=>$this->getCategories()]);
		$cat = isset($_GET['cat']) ? $_GET['cat'] : 0;
		print_r($_GET['cat']);
		$this->loadView("movies",["movies"=>$this->getMovies($cat)]);
		$this->loadView("footer");
	}
	function help(){
		
	
		
		$this->loadView("top",["categories"=>$this->getCategories()]);
		$this->loadView("help");
		$this->loadView("footer");
	}
}