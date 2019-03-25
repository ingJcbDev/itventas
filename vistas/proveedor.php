<?php
 	require 'header.php';
?>

<!-- ************************************************************************************************ -->
<!-- contenido -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
 <!--    Main content   -->
<seletion class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <h1 class="box-title">Proveedor <button class="btn btn-success" onclick="mostrarform(true)">
            <i class="fa fa-plus-circle"></i> 
            Agregar</button></h1>
            <div class="box-tools pull-right">
            </div>
          </div>
          <!-- /.box-header -->
          <!-- centro -->
          <div class="panel-body table-responsive" id="listadoregistros">
            <table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover">
              <thead>
                <th>Opciones</th>
                <th>Nombre</th>
                <th>Tipo Documento</th>
                <th>Documento</th>
                <th>Numero</th>
                <th>Email</th>
              </thead>
              <tfoot>
                <th>Opciones</th>
                <th>Nombre</th>
                <th>Tipo Documento</th>
                <th>Numero</th>
                <th>Email</th>
              </tfoot>
            </table>
          </div>
          <div class="panel-body" id="formularioregistros">
            <form name="formulario" id="formulario" method="POST">
              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xl-12">
                <label>Nombre:</label>
                <input type="hidden" name="idpersona" id="idpersona">
                <input type="hidden" name="tipo_persona" id="tipo_persona" value="Proveedor">
                <input type="text" class="form-control" name="nombre" id="nombre" maxlength="100" placeholder="Nombre del proveedor" required>
              </div>

              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xl-12">
                <label>Tipo Documento:</label>
                <select class="form-control select-picker" name="tipo_documento" id="tipo_documento" required>
                	<option value="CC">Cedula Cidadania</option>
                	<option value="TI">Tarjeta Identidad</option>
                </select>
              </div>

              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xl-12">
                <label>Numero Documento:</label>
                <input type="text" class="form-control" name="num_documento" id="num_documento" maxlength="20" placeholder="Numero Documento">
              </div>

              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xl-12">
                <label>Dirección:</label>
                <input type="text" class="form-control" name="direccion" id="direccion" maxlength="70" placeholder="Dirección">
              </div>

              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xl-12">
                <label>Telefono:</label>
                <input type="text" class="form-control" name="telefono" id="telefono" maxlength="20" placeholder="Telefono">
              </div>

              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xl-12">
                <label>Email:</label>
                <input type="text" class="form-control" name="email" id="email" maxlength="50" placeholder="Email">
              </div>

              <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xl-12">
                <button class="btn btn-primary" type="submit" id="btnGuardar"> 
                   <i class="fa fa-save"></i> Guardar 
                </button>
                <button class="btn btn-danger" onclick="cancelarform()" type="button"> 
                   <i class="fa fa-arrow-circle-left"></i> Cancelar 
                </button>
              </div> 

            </form>
          </div>
          <!-- fin centro -->
        </div> <!-- /.box -->
      </div> <!-- /.col -->
    </div> <!-- /.row -->
  </seletion> <!-- /.content -->

</div> <!-- /.content-wrapper -->
<!-- fin contenido -->
 



  </div>
  <!-- /.content-wrapper -->

<!-- ************************************************************************************************ -->
<?php
 	require 'footer.php';
?>
<script type="text/javascript" src="scripts/proveedor.js" ></script> 