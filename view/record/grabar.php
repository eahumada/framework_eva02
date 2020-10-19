<?php
echo "<!-- Top -->";
require_once 'view/plantillas/top.php';
?>

<div>
  <h1>Registro Producto</h1>
  <p><?= $this->modelo->mensaje ?></p>
</div>


<div class="row">
  <div class="col-12">
      <div class="card">
          <div class="card-header">
              <h3 class="card-title">Detalles del producto</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-10">

          <form class="form-horizontal" onsubmit="return validaCampos(event)" method="POST" action="?path=record&metodo=grabar">
            <fieldset>

            <!-- Form Name -->
            <legend>Datos Ingresados</legend>

            <!-- Text input-->
            <div class="form-group row">
              <label class="col-md-4 control-label" for="textinput">CODIGO:</label>  
              <div class="col-md-4">
                <span><?=$producto->codigo?></span>
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group row">
              <label class="col-md-4 control-label" for="textinput">NOMBRE:</label>  
              <div class="col-md-4">
                <span><?=$producto->nombre ?></span>                  
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group row">
              <label class="col-md-4 control-label" for="categoria">CATEGORIA:</label>  
              <div class="col-md-4">
                <span><?=$producto->id_categoria ?></span>                  
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group row">
              <label class="col-md-4 control-label" for="sucursal">SUCURSAL:</label>  
              <div class="col-md-4">
                <span><?=$producto->id_sucursal ?></span>                  
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group row">
              <label class="col-md-4 control-label" for="descripcion">DESCRIPCION:</label>  
              <div class="col-md-4">
                <span><?=$producto->descripcion ?></span>
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group row">
              <label class="col-md-4 control-label" for="cantidad">CANTIDAD:</label>  
              <div class="col-md-4">
                <span><?=$producto->cantidad ?></span>
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group row">
              <label class="col-md-4 control-label" for="precio">PRECIO:</label>  
              <div class="col-md-4">
                  <span><?=$producto->precio ?></span>
              </div>
            </div>

            </fieldset>
            </form>

          </div>
          <!-- /.card-body -->
      </div>
      <!-- /.card -->
  </div>
</div>

<?php
echo "<!-- Bottom -->";
require_once 'view/plantillas/bottom.php';
?>
