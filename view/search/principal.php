<?php
print "<!-- Top -->";
require_once 'view/plantillas/top.php';
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
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <!-- row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card"> 
                            <div class="card-header">
                            
                                <form class="form-horizontal" method="POST" action="?path=search">

                                    <div class="input-group-append">
                                        <div class="col-sm-4">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <input name="criterio" value="codigo" <?php echo $criterio=="codigo"?"checked":""; ?> type="radio">codigo</input>
                                                    &nbsp;
                                                    <input name="criterio" value="nombre" <?php echo $criterio=="nombre"?"checked":""; ?> type="radio">nombre</input>
                                                    &nbsp;
                                                    <input name="criterio" value="sucursal" <?php echo $criterio=="sucursal"?"checked":""; ?> type="radio">sucursal</input>
                                                    &nbsp;
                                                </div>
                                            </div>
                                        </div>
                                        <input type="text" name="query" class="form-control float-right"
                                            placeholder="Buscar" value="<?php echo $query; ?>" >
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-secondary"><i class="fas fa-search"></i>Buscar</button>
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
                                        foreach ($this->modelo->productos as $row) {
                                            $id = $row['id_producto'];
                                            echo("<tr>");
                                            echo("<td>".$id."</td>");
                                            echo("<td>".$row['codigo']."</td>");
                                            echo("<td>".$row['nombre']."</td>");
                                            echo("<td>".$row['nombre_categoria']."</td>");
                                            echo("<td>".$row['nombre_sucursal']."</td>");
                                            echo("<td>".$row['cantidad']."</td>");
                                            echo("<td>".$row['precio']."</td>");
                                            echo("<td>".$row['estado']."</td>");
                                            echo("<td>");
                                            echo("<a class='btn btn-success' href='?path=update&id=".$id."'>editar</a>");
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
require_once 'view/plantillas/bottom.php';
?>
