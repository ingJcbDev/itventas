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
          <h1 class="box-title">Articulo <button class="btn btn-success" onclick="mostrarform(true)" id="btnagregar">
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
                <th>Categoria</th>
                <th>codigo</th>
                <th>Stock</th>
                <th>Imagen</th>
                <th>Estado</th>
              </thead>
              <tfoot>
                <th>Opciones</th>
                <th>Nombre</th>
                <th>Categoria</th>
                <th>codigo</th>
                <th>Stock</th>
                <th>Imagen</th>
                <th>Estado</th>
              </tfoot>
            </table>
          </div>
          <div class="panel-body" id="formularioregistros">
            <form name="formulario" id="formulario" method="POST">

              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xl-12">
                <label>Nombre(*):</label>
                <input type="hidden" name="idarticulo" id="idarticulo">
                <input type="text" class="form-control" name="nombre" id="nombre" maxlength="100" placeholder="Nombre" required>
              </div> 
                                         
              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xl-12">
                <label>Categoria(*):</label>
                <select id="idcategoria" name="idcategoria" class="form-control selectpicker" data-live-search="true"></select>
              </div>

              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xl-12">
                <label>Stock(*):</label>
                <input type="number" class="form-control" name="stock" id="stock" required>
              </div> 

              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xl-12">
                <label>Descripcion:</label>
                <input type="text" class="form-control" name="descripcion" id="descripcion" maxlength="256" placeholder="Descripción">
              </div>

              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xl-12">
                <label>Imagen:</label>
                <input type="file" class="form-control" name="imagen" id="imagen">
                <input type="hidden" name="imagenactual" id="imagenactual">
                <img src="" width="150px" height="120px" id="imagenmuestra">
              </div>              

              <div class="form-group col-lg-6 col-md-6 col-sm-6 col-xl-12">
                <label>Codigo:</label>
                <input type="text" class="form-control" name="codigo" id="codigo" placeholder="Codigo de Barras" required>
                <!-- boton que genera el codigo de barras -->
                <button class="btn btn-success" type="button" onclick="generarbarcode()">Generar</button>
                <!--  -->

                <!-- Boton para imprimir codigo de barras -->
                <button class="btn btn-info" type="button" onclick="imprimir()">Imprimir</button>
                <!--  -->

                <!-- div que va mostrar codigo de barras-->
                <div id="print">
                  <!-- etiqueta en la cual se alojara el codigo de barras -->
                  <svg id="barcode"> </svg>
                </div>
                <!--  -->

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

<!-- libreria que me genera el codigo de barras -->
<script type="text/javascript" src="../public/js/JsBarcode.all.min.js"></script>
<!--  -->
<!-- libreria para imprimir codigo de barras -->
<script type="text/javascript" src="../public/js/jquery.PrintArea.js"></script>
<!--  -->

<script type="text/javascript" src="scripts/articulo.js" ></script>
 