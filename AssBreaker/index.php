<?php 

require_once("Views/Layout/header.php");
require_once("Controllers/carrerasController.php");

ob_start();
session_start();
require_once("Configurations/conexion.php");

DATABASE::connect();


if (isset($_GET['controller']) && isset($_GET['action'])) {
	
	$nombre_controlador = $_GET['controller'] . "Controller";
	$accion = $_GET['action'];

	if (class_exists($nombre_controlador)) {
		
		$controlador = new $nombre_controlador();

		if (method_exists($controlador, $accion)) {
			
			$controlador->$accion();
		}
		else{
			header("location: index.php?controller=carreras&action=carrerasDestacadas");
		}

	}
	else{
		header("location: index.php?controller=carreras&action=carrerasDestacadas");
	}

}
else{
	header("location: index.php?controller=carreras&action=carrerasDestacadas");

}

require_once("Views/Layout/footer.php");

 ?>