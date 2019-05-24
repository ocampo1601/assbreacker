<?php 

require_once("Models/carrerasModel.php");

class carrerasController
{
	
	public function carrerasDestacadas()
	{

		$carrerasModel = new carrerasModel();
		$carreras = $carrerasModel->carrerasDestacadas();

		require_once("Views/CarrerasViews/carrerasDestacadas.php");
	} 
	
}

 ?>