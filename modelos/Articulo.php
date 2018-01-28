<?php
// Incluimos inicialmente la conexion a la base de datos
require "../config/Conexion.php"; 

/**
* 
*/
class Articulo {
	
	// Constructor
	public function __construct()
	{
		# code...
	}

	// Metodo de insert registros tabla articulo
	public function insertar ($idcategoria, $codigo, $nombre, $stock, $descripcion, $imagen)
	{
		$sql="INSERT INTO articulo 
				            (idcategoria, 
				             codigo, 
				             nombre, 
				             stock, 
				             descripcion, 
				             imagen, 
				             condicion) 
				VALUES      ('$idcategoria', 
				             '$codigo', 
				             '$nombre', 
				             '$stock', 
				             '$descripcion', 
				             '$imagen', 
				             '1');";
		return ejecutarConsulta($sql);
	}

	// Metodo de update registros tabla articulo
	public function editar ($idarticulo, $idcategoria, $codigo, $nombre, $stock, $descripcion, $imagen)
	{
		$sql="UPDATE articulo 
				SET    idcategoria = '$idcategoria', 
				       codigo = '$codigo', 
				       nombre = '$nombre', 
				       stock = '$stock', 
				       descripcion = '$descripcion', 
				       descripcion = '$descripcion', 
				       imagen = '$imagen' 
				WHERE  idarticulo = '$idarticulo';";
		return ejecutarConsulta($sql);
	}

	// Metodo de update desactivar articulo
	public function desactivar ($idarticulo)
	{
		$sql="UPDATE articulo 
				SET    condicion = '0' 
				WHERE  idarticulo = '$idarticulo';";
		return ejecutarConsulta($sql);
	}

    // Metodo de update activar articulo
	public function activar ($idarticulo)
	{
		$sql="UPDATE articulo 
				SET    condicion = '1' 
				WHERE  idarticulo = '$idarticulo';";
		return ejecutarConsulta($sql);
	}

	// mostrar solo una fila 
	public function mostrar($idarticulo)
	{
		$sql="SELECT * 
				FROM   articulo 
				WHERE  idarticulo = '$idarticulo';";
		return ejecutarConsultaSimpleFila($sql);
	}

	// mostrar lista de registros 
	public function listar()
	{
		$sql="SELECT a.idarticulo, 
				       a.idcategoria, 
				       c.nombre AS categoria, 
				       a.codigo, 
				       a.nombre, 
				       a.stock, 
				       a.descripcion, 
				       a.imagen, 
				       a.condicion 
				FROM   articulo a 
				       INNER JOIN categoria c 
				               ON ( a.idcategoria = c.idcategoria );";
		return ejecutarConsulta($sql);
	}
}

?>