<?php
require_once '../model/producto.php';
require_once '../model/bodega_crud.php';

if(empty($_POST['id'])){
    echo 'Debe ingresar ID a eliminar';
}else{

    $id=$_POST['id'];

    $bodega_crud =  new bodega_crud();
    
    $productos = $bodega_crud->leer_producto($id);

    echo "<h1>Datos Ingresados del producto a eliminar:</h1>";

    foreach($productos as $row) {
        echo "<p>";
        echo "<br>ID:".$row['id_producto'];
        echo "<br>CODIGO:".$row['codigo'];
        echo "<br>NOMBRE:".$row['nombre'];
        echo "<br>CANTIDAD:".$row['cantidad'];
        echo "<br>PRECIO:".$row['precio'];    
        echo "</p>";
    }


    $filas = $bodega_crud->eliminar_producto($id);

    echo "<br>Eliminados # $filas productos";
    
}
