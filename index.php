<!DOCTYPE html>
<?php

if(!isset($_GET['path'])){

    require_once "controller/inicio_controller.php";
    $controlador = new inicio_controller();
    call_user_func(array($controlador, "inicio"));

}else{

    $controlador = $_GET['path'];
    require_once "controller/".$controlador."_controller.php";
    $controlador = $controlador."_controller";
    $controlador = new $controlador;
    $metodo = isset($_GET['metodo']) ? $_GET['metodo'] : "inicio";
    call_user_func(array($controlador, $metodo));

}