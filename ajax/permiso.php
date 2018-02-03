<?php
require_once "../modelos/Permiso.php";

$permiso = new Permiso();

switch ($_GET["op"]) {
	case 'listar':
				$rspta = $permiso->listar();
				//vamos a declarar una array
				$data = array();

				while ($reg=$rspta->fetch_object()){
					$data[]=array(
						"0"=>$reg->nombre
					);
				}
				$results = array(
					"sEcho"=>1,//Informacion para el datatables
					"iTotalRecords"=>count($data),// Enviamos el total registros al datatable
					"iTotalDisplayRecords"=>count($data),// enviamos el total registros a visualizacion
					"aaData"=>$data//
				);
				echo json_encode($results);
		break;

}
// quede video 21
?>