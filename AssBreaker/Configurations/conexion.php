<?php 

class DATABASE
{
	
	static function connect()
	{

		$host = "localhost";
		$user = "root";
		$password = "111";
		$database = "assbreacker";

		$conexion = mysqli_connect($host, $user, $password, $database);

		mysqli_query($conexion, "SET NAMES utf8;");

		return $conexion;
	}

}

 ?>