<?php 
include 'varConfig.php';
function base_url(){
	global $baseURL;
	return $baseURL; 
}

try{
	#conexion a la base de datos
	$baseConectDB = new PDO("mysql:host=$host; dbname=$name_bd", "$usuario_db", "$contrasena_db");
	// echo "conectado a".$name_bd;

	}catch(PDOException $e){
	#devuelve el error
	die ('Error'.$e->getMessage());

	}


 ?>