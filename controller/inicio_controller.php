<?php
require_once "model/producto.php";

Class inicio_controller {

    private $modelo;

    public function __construct(){
        $this->modelo = new producto(
            0,"","",0,"","",0,0
        );
    }

    public function inicio(){
        require_once "view/inicio/principal.php";
    }

}
