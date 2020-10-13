<?php
print "<!-- Top -->";
include 'plantilla.top.php';
?>
<body>
  <h1>Actualizar Producto</h1>
  <p>Permite actualizar nombre, precio y descripción del producto.</p>
</body>

<div class="row">
  <div class="col-12">
      <div class="card">
          <div class="card-header">
              <h3 class="card-title">Detalles del producto a dar de baja</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-10">

          <form class="form-horizontal">
            <fieldset>

            <!-- Form Name -->
            <legend>Formulario de Ingreso del Producto</legend>

            <!-- Text input-->
            <div class="form-group row">
              <label class="col-md-4 control-label" for="id">ID:</label>  
              <div class="col-md-4">
              <input id="id" name="id" type="text" placeholder="id auto incrementable" class="form-control input-md" required="">
              <span class="help-block">Id auto incrementable</span>  
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group row">
              <label class="col-md-4 control-label" for="textinput">NOMBRE:</label>  
              <div class="col-md-4">
              <input id="textinput" name="textinput" type="text" placeholder="Nombre del producto" class="form-control input-md" required="">
              <span class="help-block">Nombre del producto</span>  
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group row">
              <label class="col-md-4 control-label" for="descripcion">DESCRIPCION:</label>  
              <div class="col-md-4">
              <input id="descripcion" name="descripcion" type="text" placeholder="Descripcion del producto" class="form-control input-md">
              <span class="help-block">Descripcion del producto</span>  
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group row">
              <label class="col-md-4 control-label" for="precio">PRECIO:</label>  
              <div class="col-md-4">
              <input id="precio" name="precio" type="text" placeholder="Precio de venta" class="form-control input-md">
              <span class="help-block">Precio de venta</span>  
              </div>
            </div>

            <div class="form-group row justify-content-center h-100">
                <div class="col-sm-10 align-self-center text-center">
                    <button type="submit" class="btn btn-success">Agregar</button>
                    <a href="{{ route('search') }}" class="btn btn-danger">Cancelar</a>
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
print "<!-- Bottom -->";
include 'plantilla.bottom.php';
?>
