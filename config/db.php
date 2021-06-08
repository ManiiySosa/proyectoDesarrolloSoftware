<?php

class Database{
	public static function connect(){
		try{
			$db = new mysqli('localhost', 'root', '', 'tienda_camisetas');
			if (mysqli_connect_error()) {
				throw new Exception("base de datos sin servicio ");
			}			
		}catch(Exception $e){
			
			echo "<script>alert('Error en la base de datos, intentelo de nuevo mas tarde');</script>";
			header('Location:http://localhost/proyectoDesarrolloSoftware/views/error.php');
		}
		
		 $db->query("SET NAMES 'utf8'");
	}
}