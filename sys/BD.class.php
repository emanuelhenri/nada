<?php
class BD{
	private static $conn;
	public function __construct(){}

	public function conn(){
		if(is_null(self::$conn)){
			self::$conn = new PDO('mysql:host=localhost;dbname=etron','root','');
			self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		return(self::$conn) ? self::$conn : false ;
	}
}
?>