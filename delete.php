<?php
print "<!-- Bottom -->";
include 'plantilla.top.php';
?>
<body>
  <h1>Dar de baja Producto</h1>
  <p>Permite dar de baja un producto con la opcion de eliminarlo</p>
</body>

<div class="row">
  <div class="col-12">
      <div class="card">
          <div class="card-header">
              <h3 class="card-title">Detalles del producto</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-10">

          <form class="form-horizontal" method="POST" action="controller/delete_controller.php">
            <fieldset>

            <!-- Form Name -->
            <legend>Formulario de Supresion de Producto</legend>

            <!-- Text input-->
            <div class="form-group row">
              <label class="col-md-4 control-label" for="id">ID:</label>  
              <div class="col-md-4">
              <input id="id" name="id" type="text" placeholder="id auto incrementable" class="form-control input-md" required="">
              <span class="help-block">Id auto incrementable</span>  
              </div>
            </div>

            <div class="form-group row justify-content-center h-100">
                <div class="col-sm-10 align-self-center text-center">
                <button type="submit" class="btn btn-success">Dar de Baja</button>
                    <button type="submit" class="btn btn-success">Eliminar</button>
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