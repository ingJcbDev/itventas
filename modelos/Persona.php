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
	public function insertar  ($tipo_persona, $nombre, $tipo_documento, $num_documento, $direccion, $telefono, $email)
	{
		$sql="INSERT INTO persona (tipo_persona, nombre, tipo_documento, num_documento, direccion, telefono, email) VALUES ('$tipo_persona', '$nombre', '$tipo_documento', '$num_documento', '$direccion', '$telefono', '$email', '1')";
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
		$sql="DELETE FROM persona WHERE idpersona='$idpersona'";
		return ejecutarConsulta($sql);
	}

    // Metodo de update activar persona
	public function activar ($idpersona)
	{
		$sql="UPDATE persona SET condicion='1' WHERE idpersona='$idpersona'";
		return ejecutarConsulta($sql);
	}

	// mostrar solo una fila 
	public function mostrar($idpersona)
	{
		$sql="SELECT * FROM persona WHERE idpersona='$idpersona'";
		return ejecutarConsultaSimpleFila($sql);
	}

	// mostrar lista de registros 
	public function listar()
	{
		$sql="SELECT * FROM persona";
		return ejecutarConsulta($sql);
	}

	// mostrar select de las personas 
	public function select()
	{
		$sql="SELECT * FROM persona where condicion=1;";
		return ejecutarConsulta($sql);
	}

}

?>