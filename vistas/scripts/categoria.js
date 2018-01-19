var tabla;

//Funcion que se ejecuta al inicio
function init(){
 mostrarform(false);
 listar();
}

// Funcion limpiar
function limpiar (){
	$("#idcategoria").val("");
	$("#nombre").val("");
	$("#descripcion").val("");
}

// Funcion mostrar formulario
function mostrarform(flag)
{
	limpiar();
	if(flag)
		{
			$("#listadoregistros").hide();
			$("#formularioregistros").show();
			$("#btnGuardar").prop("disabled",false);
		}
		else
		{
			$("#listadoregistros").show();
			$("#formularioregistros").hide();
		}
	}

function cancelarform(){
	limpiar();
	mostrarform(false);
}

function listar(){
	tabla=$('#tbllistado').dataTable({
		"aProcessing": true,//activamos el proceso de datatables
		"aServerSide": true,//paginacion y filtrado realizados por el servidor
		dom: 'Bfrtip',//Definimos los elementos del control de tabla
		buttons:[
					'copyHtml5',
					'excelHtml5',
					'csvHtml5',
					'pdf'
				],
		"ajax":
				{
					url: '../ajax/categoria.php?op=listar',
					type: "get",
					dataType: "json",
					error: function(e){
						console.log(e.responseText);
					} 
				},
		"bDestroy": true,
		"iDisplayLength": 5, //paginacion 
		"order": [[0, "desc"]] // orden los datos (columna, orden)
	}).DataTable();
}

init();