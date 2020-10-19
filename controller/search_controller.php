<?php

require_once "model/bodega.php";

Class search_controller {
    private $modelo;

    public function __CONSTRUCT(){
        $this->modelo = new stdClass();
        $this->modelo->criterio = "";
        $this->modelo->query = "";
        $this->modelo->producto  = [];
    }

    public function inicio(){

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

        $this->modelo->criterio = $criterio;
        $this->modelo->query = $query;
        $this->modelo->productos = $productos;

        require_once "view/search/principal.php";

    }

}