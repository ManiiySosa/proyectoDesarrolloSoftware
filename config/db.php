<?php

class Database{
	public static function connect(){
		$db = new mysqli('localhost', 'root', '', 'tienda_camisetas');

		 if (mysqli_connect_error()) {
            die('Error de Conexión (' . mysqli_connect_errno() . ') '
                    . mysqli_connect_error());
         }
		 $db->query("SET NAMES 'utf8'");
		return $db;
	}
}

