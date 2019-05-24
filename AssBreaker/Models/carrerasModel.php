<?php 

class carrerasModel
{
	private $conexion;
	
	function __construct()
	{
		$this->conexion = Database::connect();
	}

	public function carrerasDestacadas()
	{
		$carreras = mysqli_query($this->conexion, "
			SELECT * FROM tbl_carreras 
			ORDER BY RAND() 
			LIMIT 6;"
		);

		return $carreras;
	}
}

 ?>