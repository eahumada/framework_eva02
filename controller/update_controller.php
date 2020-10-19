<?php

require_once "model/bodega.php";
require_once 'model/producto.php';

Class update_controller {
    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo = new stdClass();
        $this->modelo->criterio = "";
        $this->modelo->query = "";
        $this->modelo->producto  = new Producto();
        $this->modelo->mensaje = "";
    }

    public function leer_producto($id) {
        
        $bodega_crud =  new bodega_crud();

        $producto  =new Producto();

        if($id!=0){
            $productos = $bodega_crud->leer_producto($id);
            foreach($productos as $row) {
                $id_producto=$row['id_producto'];
                $codigo=$row['codigo'];
                $nombre=$row['nombre'];
                $id_categoria=$row['id_categoria'];
                $id_sucursal=$row['id_sucursal'];
                $descripcion=$row['descripcion'];
                $cantidad=$row['cantidad'];
                $precio=$row['precio'];                    

                $producto->init(
                    $id_producto,
                    $codigo,
                    $nombre,
                    $id_categoria,
                    $id_sucursal,
                    $descripcion,
                    $cantidad,
                    $precio               
                );

                $this->modelo->producto=$producto;
                
            }
        } else {
            $this->modelo->mensaje = 'No se indicado ID del producto a editar.';
        }

        return $producto;

    }

    public function inicio(){
        
        $bodega_crud =  new bodega_crud();

        $categorias = $bodega_crud->listar_categorias();
        $sucursales = $bodega_crud->listar_sucursales();

        $id = 0;

        if(!empty($_GET['id'])){
            $id = $_GET['id'];
        }

        $producto = $this->leer_producto($id);

        require_once "view/update/principal.php";

    }

    public function grabar() {

        $producto = new producto();

        $id = 0;

        if(empty($_POST['id'])){
            $this->modelo->mensaje =  'No se ha indicado ID de producto a editar.';
        } else {

            $id = $_POST['id'];

            $producto = $this->leer_producto($id);

            echo "Producto: ".$producto->id;
    
            if(empty($_POST['nombre'])){
                $this->modelo->mensaje =  'Debe ingresar nombre';
            }else if(empty($_POST['descripcion'])){
                $this->modelo->mensaje =  'Debe ingresar la descripcion';
            }else if(empty($_POST['precio'])){
                $this->modelo->mensaje =  'Debe ingresar el precio';
            }else{
    
                $producto->nombre=$_POST['nombre'];
                $producto->descripcion=$_POST['descripcion'];
                $producto->precio=$_POST['precio'];
                         
                $mensaje = "";
            
                $bodega_crud =  new bodega_crud();
            
                $filas = $bodega_crud->update_producto($producto);
            
                $mensaje .=  "<br>Actualizados # $filas productos";
    
                $this->modelo->mensaje = $mensaje;
    
            }
    
        }
                
        $this->modelo->producto = $producto;

        require_once "view/update/principal.php";
        
    }
}