<?php
//error_reporting(0);

class Database{
	public static function connect(){
		try{
			$db = new mysqli('localhost', 'root', '', 'tienda_camisetas');
			if (mysqli_connect_error()) {
				throw new Exception("base de datos sin servicio ");
			}			
		}catch(Exception $e){
			
			header('Location:http://localhost/proyectoDesarrolloSoftware-master/views/error.php');
		}
		
		 $db->query("SET NAMES 'utf8'");
		// $db->close();

}