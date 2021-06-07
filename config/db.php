<?php

class Database{
	public static function connect(){
		try{
			$db = new mysqli('localhost', 'root', '', 'tienda_camisetas');
		

		}catch(mysqli_sql_exception $e){
            throw $e;
		}

		 $db->query("SET NAMES 'utf8'");
		 
		return $db;
	}
}

