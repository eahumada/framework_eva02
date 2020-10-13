<?php
require_once '../model/producto.php';
require_once '../model/bodega_crud.php';

if(empty($_POST['codigo'])){
    echo 'Debe ingresar codigo';
}else if(empty ($_POST['categoria'])){
    echo 'Debe ingresar la categoria';
}else if(empty($_POST['sucursal'])){
    echo 'Debe ingresar la sucursal';
}else if(empty($_POST['nombre'])){
    echo 'Debe ingresar nombre';
}else if(empty($_POST['descripcion'])){
    echo 'Debe ingresar la descripcion';
}else if(empty($_POST['cantidad'])){
    echo 'Debe ingresar la cantidad';
}else if(empty($_POST['precio'])){
    echo 'Debe ingresar el precio';
}else{

    $id=0;
    $codigo=$_POST['codigo'];
    $nombre=$_POST['nombre'];
    $id_categoria=$_POST['categoria'];
    $id_sucursal=$_POST['sucursal'];
    $descripcion=$_POST['descripcion'];
    $cantidad=$_POST['cantidad'];
    $precio=$_POST['precio'];
    
    $producto = new producto($id,$codigo,$nombre,$id_categoria,$id_sucursal,$descripcion,$cantidad,$precio);
 
    echo "<h1>Datos Ingresados:</h1>";

    echo "<br>ID:".$producto->get_id();
    echo "<br>CODIGO:".$producto->get_codigo();
    echo "<br>NOMBRE:".$producto->get_nombre();
    echo "<br>CATEGORIA:".$producto->get_id_categoria();
    echo "<br>SUCURSAL:".$producto->get_id_sucursal();
    echo "<br>DESCRIPCION:".$producto->get_descripcion();
    echo "<br>CANTIDAD:".$producto->get_cantidad();
    echo "<br>PRECIO:".$producto->get_precio();

    $bodega_crud =  new bodega_crud();

    $filas = $bodega_crud->update_producto($producto);

    echo "<br>Insertados # $filas productos";
    
}
