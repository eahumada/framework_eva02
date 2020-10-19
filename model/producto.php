<?php

class producto {

    public $id;
    public $codigo;
    public $nombre;
    public $id_categoria;
    public $id_sucursal;
    public $descripcion;
    public $cantidad;
    public $precio;

    function __construct() {
    }
    
    function init($id,$codigo,$nombre,$categoria,$sucursal,$descripcion,$cantidad,$precio) {
        $this->id=$id;
        $this->codigo=$codigo;
        $this->nombre=$nombre;
        $this->id_categoria=$categoria;
        $this->id_sucursal=$sucursal;
        $this->descripcion=$descripcion;
        $this->cantidad=$cantidad;
        $this->precio=$precio;
    }

    function get_id() {
        return $this->id;
    }

    function get_codigo() {
        return $this->codigo;
    }

    function get_nombre() {
        return $this->nombre;
    }

    function get_id_categoria() {
        return $this->id_categoria;
    }

    function get_id_sucursal() {
        return $this->id_sucursal;
    }

    function get_descripcion() {
        return $this->descripcion;
    }

    function get_cantidad() {
        return $this->cantidad;
    }

    function get_precio() {
        return $this->precio;
    }

}
