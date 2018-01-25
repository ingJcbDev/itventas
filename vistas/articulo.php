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
          <h1 class="box-title">Articulo<button class="btn btn-success" onclick="mostrarform(true)">
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
<!-- $idarticulo, $idarticulo, $codigo, $nombre, $stock, $descripcion, $imagen                 -->
                <th>Opciones</th>
                <th>id Categoria</th>
                <th>codigo</th>
                <th>Nombre</th>
                <th>Stock</th>
                <th>Descripcion</th>
                <th>Imagen</th>
                <th>Estado</th>
              </thead>
              <tfoot>
                <th>Opciones</th>
                <th>id Categoria</th>
                <th>codigo</th>
                <th>Nombre</th>
                <th>Stock</th>
                <th>Descripcion</th>
                <th>Imagen</th>
                <th>Estado</th>
              </tfoot>
            </table>
          </div>
          <div class="panel-body" id="formularioregistros">
            <form name="formulario" id="formulario" method="POST">

              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xl-12">
                <label>Categoria:</label>
                <input type="hidden" name="idarticulo" id="idarticulo">
                <input type="text" class="form-control" name="idcategoria" id="idcategoria" maxlength="50" placeholder="idcategoria" required>
              </div>

              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xl-12">
                <label>Codigo:</label>
                <input type="text" class="form-control" name="codigo" id="codigo" maxlength="50" placeholder="codigo" required>
              </div>

              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xl-12">
                <label>Nombre:</label>
                <input type="text" class="form-control" name="nombre" id="nombre" maxlength="50" placeholder="nombre" required>
              </div>                            

              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xl-12">
                <label>Stock:</label>
                <input type="text" class="form-control" name="stock" id="stock" maxlength="50" placeholder="stock" required>
              </div> 

              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xl-12">
                <label>Descripcion:</label>
                <input type="text" class="form-control" name="descripcion" id="descripcion" maxlength="256" placeholder="Descripción">
              </div>

              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xl-12">
                <label>Imagen:</label>
                <input type="text" class="form-control" name="imagen" id="imagen" maxlength="50" placeholder="imagen" required>
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
<script type="text/javascript" src="scripts/articulo.js" ></script>
 