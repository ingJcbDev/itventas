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
          <h1 class="box-title">Permiso<button id="btnagregar" class="btn btn-success" onclick="mostrarform(true)">
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
                <th>Nombre</th>
              </thead>
              <tfoot>
                <th>Nombre</th>
              </tfoot>
            </table>
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
<script type="text/javascript" src="scripts/permiso.js" ></script>
 