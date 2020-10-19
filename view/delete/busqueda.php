<?php
print "<!-- Top -->";
include 'view/plantillas/top.php';
?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Dar de baja Producto</h1>
                        <p>
                        De acuerdo a los requerimientos del software, permite borrar registros ya sea de toda la base de datos o por sucursal,
                        Es posible realizar un borrado lógico (Actualizando el estado del producto, activo ' ' o inactivo 'X') 
                        o dado de baja de forma definitiva eliminandolo de la base de datos. Filtrado por código y/o sucursal.
                        </p>                        
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

                <div class="row">
                  <div class="col-12">
                    <div class="card"> 
                        <div class="card-header">
                          <div class="form-group row justify-content-center h-100">
                            <div class="col-sm-10 align-self-center text-center">
                                <a href="?path=delete&metodo=eliminar&accion=desactivar&criterio=<?php echo $criterio ?>&query=<?php echo $query ?>" class="btn btn-success">Dar de baja</a>
                                <a href="?path=delete&metodo=eliminar&accion=eliminar&criterio=<?php echo $criterio ?>&query=<?php echo $query ?>" class="btn btn-danger">Eliminar</a>
                                <a href="delete.php" class="btn btn-primary">Cancelar</a>
                            </div>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

<?php
print "<!-- Bottom -->";
include 'view/plantillas/bottom.php';
?>




