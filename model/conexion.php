<?php

class conexion
{

    public static function conecta()
    {

        $server = "localhost";
        $user = "root";
        $pass = "";
        $bd = "bodega"; // debemos escribir el nombre de nuestra base de datos.

        // manejar excepciones.
        try {
            $conexion = mysqli_connect($server, $user, $pass, $bd);
            return $conexion;
        } catch (mysqli_sql_exception $error) {
            print $error->getMessage();
            exit();
        }
    }
}
