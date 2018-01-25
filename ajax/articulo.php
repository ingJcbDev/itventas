<?php
require_once "../modelos/Articulo.php";

$articulo = new Articulo();

$idarticulo = isset($_POST["idarticulo"]) ? limpiarCadena($_POST["idarticulo"]) :"";
$idcategoria = isset($_POST["idcategoria"]) ? limpiarCadena($_POST["idcategoria"]) :"";
$codigo = isset($_POST["codigo"]) ? limpiarCadena($_POST["codigo"]) :"";
$nombre = isset($_POST["nombre"]) ? limpiarCadena($_POST["nombre"]) :"";
$stock = isset($_POST["stock"]) ? limpiarCadena($_POST["stock"]) :"";
$descripcion = isset($_POST["descripcion"]) ? limpiarCadena($_POST["descripcion"]) :"";
$imagen = isset($_POST["imagen"]) ? limpiarCadena($_POST["imagen"]) :"";

switch ($_GET["op"]) {

/*	if(!file_exists($_FILES['imagen']['tmp_name']) || !is_uploaded_file($_FILES['imagen']['tmp_name']))
	{
		$imagen="";
	}else{
		$ext=explode(".", $_FILES["imagen"]["name"]);
		if($_FILES['imagen']['type'] == "image/jpg" || $_FILES['imagen']['type'] == "image/jpeg" || $_FILES['imagen']['type'] == "image/png")
		{
			$imagen= round(microtime(true)) . '.' . end($ext);
			move_uploaded_file($_FILES["imagen"]["tmp_name"], "../files/articulos/" . $imagen);
		}
	}*/

	case 'guardaryeditar':
			if(empty($idarticulo)){
				$rspta = $articulo->insertar($idcategoria, $codigo, $nombre, $stock, $descripcion, $imagen);
				echo $rspta ? "Articulo registrada" : "Articulo no se pudo registrar";
			}	else {
				$rspta = $articulo->editar($idarticulo, $idcategoria, $codigo, $nombre, $stock, $descripcion, $imagen);
				echo $rspta ? "Articulo actualizada" : "Articulo no se pudo actualizar";
			}
		break;
	
	case 'desactivar':
				$rspta = $articulo->desactivar($idarticulo);
				echo $rspta ? "Articulo desactivada" : "Articulo no se pudo desactivar";
		break;

	case 'activar':
				$rspta = $articulo->activar($idarticulo);
				echo $rspta ? "Articulo activada" : "Articulo no se pudo activar";
		break;

	case 'mostrar':
				$rspta = $articulo->mostrar($idarticulo);
				echo json_encode($rspta);
		break;

	case 'listar':
				$rspta = $articulo->listar();
				//vamos a declarar una array
				$data = array();

				while ($reg=$rspta->fetch_object()){
					$data[]=array(
						"0"=>($reg->condicion)? '<button class="btn btn-warning" onclick="mostrar('.$reg->idarticulo.')"> <i class="fa fa-pencil"></i></button>'.
						' <button class="btn btn-danger" onclick="desactivar('.$reg->idarticulo.')"> <i class="fa fa-close"></i></button>' : 
						'<button class="btn btn-warning" onclick="mostrar('.$reg->idarticulo.')"> <i class="fa fa-pencil"></i></button>'.
						' <button class="btn btn-primary" onclick="activar('.$reg->idarticulo.')"> <i class="fa fa-check"></i></button>',
						"1"=>$reg->nombre,
						"2"=>$reg->categoria,
						"3"=>$reg->codigo,
						"4"=>$reg->stock,
						"5"=>"<img src='../files/articulos/".$reg->imagen."' height='50px' width='50px'>",
						"6"=>($reg->condicion) ? '<span class="label bg-green">Activado</span>' : '<span class="label bg-red">Desactivado</span>' 
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