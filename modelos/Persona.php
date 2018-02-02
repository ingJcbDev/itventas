<?php
// Incluimos inicialmente la conexion a la base de datos
require "../config/Conexion.php"; 

/**
* 
*/
class Persona {
	
	// Constructor
	public function __construct()
	{
		# code...
	}
// 		idpersona, tipo_persona, nombre, tipo_documento, num_documento, direccion, telefono, email

	// Metodo de insert registros tabla persona
	public function insertar($tipo_persona, $nombre, $tipo_documento, $num_documento, $direccion, $telefono, $email)
	{
		$sql="INSERT INTO persona (tipo_persona, nombre, tipo_documento, num_documento, direccion, telefono, email) VALUES ('$tipo_persona', '$nombre', '$tipo_documento', '$num_documento', '$direccion', '$telefono', '$email')";
		return ejecutarConsulta($sql);
	}

	// Metodo de update registros tabla persona
	public function editar ($idpersona, $tipo_persona, $nombre, $tipo_documento, $num_documento, $direccion, $telefono, $email)
	{
		$sql="UPDATE persona SET tipo_persona='$tipo_persona', nombre='$nombre', tipo_documento='$tipo_documento', num_documento='$num_documento', direccion='$direccion', telefono='$telefono', email='$email' WHERE idpersona='$idpersona'";
		return ejecutarConsulta($sql);
	}

	// Metodo de eliminar persona
	public function eliminar ($idpersona)
	{
		$sql="DELETE FROM persona WHERE idpersona='$idpersona';";
/*echo "<pre><br>Elin¡minas:<br>";
print_r($sql);
echo "</pre>";
die();*/
		return ejecutarConsulta($sql);
	}

	// mostrar solo una fila 
	public function mostrar($idpersona)
	{
		$sql="SELECT * FROM persona WHERE idpersona='$idpersona'";
		return ejecutarConsultaSimpleFila($sql);
	}

	// mostrar lista de registros 
	public function listarp()
	{
		$sql="SELECT * FROM persona WHERE tipo_persona = 'Proveedor';";
		return ejecutarConsulta($sql);
	}

	// mostrar lista de registros 
	public function listarc()
	{
		$sql="SELECT * FROM persona WHERE tipo_persona = 'Cliente';";
		return ejecutarConsulta($sql);
	}

}

?>