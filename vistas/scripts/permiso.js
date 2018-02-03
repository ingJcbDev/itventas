var tabla;

//Funcion que se ejecuta al inicio
function init(){

 mostrarform(false); // se llama la funcion mostrarform pero inicialmente el formulario no se muestre
 listar();
}

// Funcion mostrar formulario
function mostrarform(flag)
{
	/*limpiar();*/
	if(flag)
		{
			$("#listadoregistros").hide(); // son los nombres de los div esto lo oculta
			$("#formularioregistros").show(); // div lo pone visible 
			$("#btnGuardar").prop("disabled",false); // este boton inicialmenteaparece visible con esto lo oculta
		}
		else
		{
			$("#listadoregistros").show(); // con la propiedad show se visualiza el div
			$("#formularioregistros").hide(); // con la propiedad hide se oculta el div
			$("#btnagregar").hide(); // con la propiedad hide se oculta el div
		}
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
					url: '../ajax/permiso.php?op=listar',
					type: "get",
					dataType: "json",
					error: function(e){
						console.log(e.responseText);
					} 
				},
		"bDestroy": true,
		"iDisplayLength": 5, //paginacion cada cuantos registros
		"order": [[0, "desc"]] // orden los datos (columna, orden)
	}).DataTable();
}


init();