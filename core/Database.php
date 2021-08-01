<?php
class Database {
	public static $conn;
	public static function getConnection(){
		if(!self::$conn){
			self::$conn = new PDO(
			"mysql:host=localhost;dbname=movies","root","");
		}
		return self::$conn;
}
}