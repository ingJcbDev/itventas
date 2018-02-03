<?php
// Incluimos inicialmente la conexion a la base de datos
require "../config/Conexion.php"; 

/**
* 
*/
class Permiso {
	
	// Constructor
	public function __construct()
	{
		# code...
	}
 

	// mostrar lista de registros 
	public function listar()
	{
		$sql="SELECT * FROM permiso";
		return ejecutarConsulta($sql);
	}

	

}

?>