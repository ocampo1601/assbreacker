<?php 

class DATABASE
{
	
	static function connect()
	{

		$host = "localhost";
		$user = "root";
		$password = "";
		$database = "assbreacker";

		$conexion = mysqli_connect($host, $user, $password, $database);

		return $conexion;
	}

}

 ?>