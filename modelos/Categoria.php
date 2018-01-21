<?php
// Incluimos inicialmente la conexion a la base de datos
require "../config/Conexion.php"; 

/**
* 
*/
class Categoria {
	
	// Constructor
	public function __construct()
	{
		# code...
	}

	// Metodo de insert registros tabla categoria
	public function insertar ($nombre, $descripcion)
	{
		$sql="INSERT INTO categoria (nombre, descripcion, condicion) VALUES ('$nombre', '$descripcion', '1')";
		return ejecutarConsulta($sql);
	}

	// Metodo de update registros tabla categoria
	public function editar ($idcategoria, $nombre, $descripcion)
	{
		$sql="UPDATE categoria SET nombre='$nombre', descripcion='$descripcion' WHERE idcategoria='$categoria'";
		return ejecutarConsulta($sql);
	}

	// Metodo de update desactivar categoria
	public function desactivar ($idcategoria)
	{
		$sql="UPDATE categoria SET condicion='0' WHERE idcategoria='$categoria'";
		return ejecutarConsulta($sql);
	}

    // Metodo de update activar categoria
	public function activar ($idcategoria)
	{
		$sql="UPDATE categoria SET condicion='1' WHERE idcategoria='$categoria'";
		return ejecutarConsulta($sql);
	}

	// mostar solo una fila 
	public function mostar ($idcategoria)
	{
		$sql="SELECT * FROM categoria WHERE idcategoria='$idcategoria'";
		return ejecutarConsultaSimpleFila($sql);
	}

	// mostar lista de registros 
	public function listar()
	{
		$sql="SELECT * FROM categoria";
		return ejecutarConsulta($sql);
	}
}

?>