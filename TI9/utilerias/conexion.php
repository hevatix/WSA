<?php
	if(!defined("SPECIALCONSTANT")) die("Acceso denegado");
	function getConnection(){
		try{
			$db_username = "root";
			$db_password = "nachitohevatix";
			$db_connection = new PDO("mysql:host=127.0.0.1;dbname=pineahat_actividadeslight;charset=UTF8",$db_username,$db_password,array(
    PDO::ATTR_PERSISTENT => true));
			$db_connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		}
		catch(PDOException $e){
			echo "Error; ".$e->getMessage();
			die();
		}
		return $db_connection;
	}
?>

