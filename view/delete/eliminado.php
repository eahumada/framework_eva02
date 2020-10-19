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
                        <p>
                            <?= $this->modelo->mensaje ?>
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
include 'view/plantillas/bottom.php';
?>




