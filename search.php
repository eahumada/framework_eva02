<?php
print "<!-- Top -->";
include 'plantilla.top.php';
?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Consultar Productos</h1>
                        <p>Permite consultar productos por código, nombre, y opcionalmente la sucursal.</p>                        
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

<?php

require_once 'model/bodega_crud.php';

$criterio="";
$query="";

if(!empty($_POST['criterio'])){
    $criterio = $_POST['criterio'];
}

if(!empty($_POST['query'])){
    $query = $_POST['query'];
}

$bodega_crud =  new bodega_crud();

if($criterio=="") {
    $productos = $bodega_crud->listar_productos();
} else if($criterio=="codigo") {
    $productos = $bodega_crud->buscar_codigo($query);
} else if($criterio=="nombre") {
    $productos = $bodega_crud->buscar_nombre($query);
} else if($criterio=="sucursal") {
    $productos = $bodega_crud->buscar_sucursal($query);
}

echo "Criterio:";
echo $criterio;
echo "&nbsp; Consulta:";
echo $query;

?>        

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <!-- row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card"> 
                            <div class="card-header">
                            
                                <form class="form-horizontal" method="POST" action="search.php">

                                    <div class="input-group-append">
                                        <div class="col-sm-4">
                                            <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <input name="criterio" value="codigo" <?php echo $criterio=="codigo"?"checked":""; ?> type="checkbox">codigo</input>
                                                &nbsp;
                                                <input name="criterio" value="nombre" <?php echo $criterio=="nombre"?"checked":""; ?> type="checkbox">nombre</input>
                                                &nbsp;
                                                <input name="criterio" value="sucursal" <?php echo $criterio=="sucursal"?"checked":""; ?> type="checkbox">sucursal</input>
                                                &nbsp;
                                            </div>
                                            </div>
                                        </div>
                                        <input type="text" name="query" class="form-control float-right"
                                            placeholder="Buscar" value="<?php echo $query; ?>" >
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default"><i class="fas fa-search"></i>Buscar</button>
                                        </div>
                                    </div>

                                </form>

                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Codigo</th>
                                            <th>Nombre</th>
                                            <th>Categoria</th>
                                            <th>Sucursal</th>
                                            <th>Cantidad</th>
                                            <th>Precio</th>
                                            <th>Estado</th>
                                            <th>Actualizar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        foreach ($productos as $row) {
                                            echo("<tr>");
                                            echo("<td>".$row['id_producto']."</td>");
                                            echo("<td>".$row['codigo']."</td>");
                                            echo("<td>".$row['nombre']."</td>");
                                            echo("<td>".$row['nombre_categoria']."</td>");
                                            echo("<td>".$row['nombre_sucursal']."</td>");
                                            echo("<td>".$row['cantidad']."</td>");
                                            echo("<td>".$row['precio']."</td>");
                                            echo("<td>".$row['estado']."</td>");
                                            echo("<td>");
                                            echo("<a class='btn btn-success' href='update.php'>editar</a>");
                                            echo("</td>");
                                            echo("</tr>");
                                        }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

<?php
print "<!-- Bottom -->";
include 'plantilla.bottom.php';
?>


