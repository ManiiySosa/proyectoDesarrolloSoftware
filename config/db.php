<?php
//error_reporting(0);

class Database{
	public static function connect(){
		try{
			$db = new mysqli('localhost', 'root', '', 'tienda_camisetas');
			throw new Exception("base de datos sin servicio ");
		}catch(Exception $e){
			/*if (mysqli_connect_error()) {
				die('Error de Conexión (' . mysqli_connect_errno() . ') '
						. mysqli_connect_error());
			 }*/
			 echo $e->getMessage().' <br>'.mysqli_connect_error();
		}
		
		 $db->query("SET NAMES 'utf8'");
		 $db->close();
		return $db;
	}
}

