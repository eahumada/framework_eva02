<?php

require_once "model/bodega.php";

Class delete_controller {
    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo = new stdClass();
        $this->modelo->criterio = "";
        $this->modelo->query = "";
        $this->modelo->mensaje = "";
        $this->modelo->productos  = [];
    }

    public function inicio() {
        $criterio = "";
        $query = "";
        require_once "view/delete/principal.php";
    }

    public function buscar(){

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
            $productos = [];
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

        $this->modelo->criterio = $criterio;
        $this->modelo->query = $query;
        $this->modelo->productos = $productos;

        require_once "view/delete/busqueda.php";

    }

    public function eliminar() {
        if(empty($_GET['accion'])){
            $this->modelo->message = 'Debe indicar accion a realizar';
        } else if(empty($_GET['criterio'])){
            $this->modelo->message = 'Debe indicar criterio a realizar';
        } if(empty($_GET['query'])){
            $this->modelo->message = 'Debe indicar filtro de busqueda realizar';
        } else {
        
            $accion="";
            $criterio="";
            $query="";
        
            if(!empty($_GET['accion'])){
                $accion = $_GET['accion'];
            }    
            
            if(!empty($_GET['criterio'])){
                $criterio = $_GET['criterio'];
            }
            
            if(!empty($_GET['query'])){
                $query = $_GET['query'];
            }
            
            $bodega_crud =  new bodega_crud();
            
            if($criterio=="") {
                $productos = [];
            } else if($criterio=="codigo") {
                $productos = $bodega_crud->buscar_codigo($query);
            } else if($criterio=="sucursal") {
                $productos = $bodega_crud->buscar_sucursal($query);
            }

            echo "<!-- ";
            echo "&nbsp; Accion:";
            echo $accion;
            echo "&nbspl; Criterio:";
            echo $criterio;
            echo "&nbsp; Consulta:";
            echo $query;
            echo " -->";

            $filas = 0;

            foreach($productos as $row) {
                /*
                echo "<p>";
                echo "<br>ID:".$row['id_producto'];
                echo "<br>CODIGO:".$row['codigo'];
                echo "<br>NOMBRE:".$row['nombre'];
                echo "<br>CANTIDAD:".$row['cantidad'];
                echo "<br>PRECIO:".$row['precio'];    
                echo "</p>";
                */
                if($accion=="eliminar") {
                    $filas += $bodega_crud->eliminar_producto($row['id_producto']);
                } else if ($accion=="desactivar") {
                    $filas += $bodega_crud->desactivar_producto($row['id_producto']);
                }
            }
        
            $this->modelo->mensaje = "<br>Eliminados # $filas productos";
            
            require_once "view/delete/eliminado.php";

       }
    }
}