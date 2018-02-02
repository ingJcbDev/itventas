var tabla;

//Funcion que se ejecuta al inicio
function init(){

 mostrarform(false); // se llama la funcion mostrarform pero inicialmente el formulario no se muestre
 listar();
 $("#formulario").on("submit", function(e)
 {
 	guardaryeditar(e);
 })

}

// Funcion limpiar
function limpiar (){
	$("#nombre").val("");
	$("#num_documento").val("");
	$("#direccion").val("");
	$("#telefono").val("");
	$("#email").val("");
	$("#idpersona").val("");
}

// Funcion mostrar formulario
function mostrarform(flag)
{
	limpiar();
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
		}
	}

function cancelarform(){
	limpiar(); //limpia los campos
	mostrarform(false); // con el false indica que el mostrarform no estara visible
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
					url: '../ajax/persona.php?op=listarp',
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

function guardaryeditar(e) {
	e.preventDefault(); // No se activara la opcion predetermindad del evento
	$("#btnGuardar").prop("disabled", true);
	var formData = new FormData($("#formulario")[0]);

	$.ajax({
		url: "../ajax/persona.php?op=guardaryeditar",
		type: "POST",
		data: formData,
		contentType: false,
		processData: false,

		success: function(datos)
		{
			bootbox.alert({
			    message: datos,
			    size: 'small'
			});
			/*bootbox.alert(datos);*/
			mostrarform(false);
			tabla.ajax.reload();
		}

		});
	limpiar();
	}

 function mostrar (idpersona){
 	$.post("../ajax/persona.php?op=mostrar", {idpersona : idpersona}, function(data, status)
 	{
 		data = JSON.parse(data);
 		mostrarform(true);

 	$("#nombre").val(data.nombre);
	$("#tipo_documento").val(data.tipo_documento);
	$("#tipo_documento").selectpicker('refresh');
	$("#num_documento").val(data.num_documento);
	$("#direccion").val(data.direccion);
	$("#telefono").val(data.telefono);
	$("#email").val(data.email);
	$("#idpersona").val(data.idpersona);

 	})
 }
// funcion para eliminar registros 
function eliminar(idpersona)
{
	bootbox.confirm("¿Está seguro de eliminar la proveedor?", function(result){
		if (result)
		{
			$.post("../ajax/persona.php?op=eliminar",{idpersona : idpersona}, function(e){
				bootbox.alert(e);
				tabla.ajax.reload();	
			});
		}
	})
}

init();