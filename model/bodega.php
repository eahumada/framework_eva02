<?php

require_once "model/bd.php"; // copiar el codigo de la clase en el codigo actual.

class bodega_crud
{

    public function leer_producto($id) // parametros de la funcion.
    {
        $query = "select * from producto where id_producto=$id";
        
        $link = conexion::conecta();
        $resultado = mysqli_query($link, $query) or die(mysqli_error($link));
        mysqli_close($link);

        return $resultado;
    }

    public function desactivar_producto($id) // parametros de la funcion.
    {
        $query = "update producto set estado='X' where id_producto=$id";
        $link = conexion::conecta();

        // Nombre de clase cuando es otra clase.
        mysqli_query($link, $query) or die(mysqli_error($link));

        $nfilas = mysqli_affected_rows($link);

        return $nfilas; // devuelve el numero de filas insertadas.

        mysqli_close($link);
    }

    public function eliminar_producto($id) // parametros de la funcion.
    {
        $query = "delete from producto where id_producto=$id";
        $link = conexion::conecta();

        // Nombre de clase cuando es otra clase.
        mysqli_query($link, $query) or die(mysqli_error($link));

        $nfilas = mysqli_affected_rows($link);

        return $nfilas; // devuelve el numero de filas insertadas.

        mysqli_close($link);
    }

    public function insertar_producto($producto) // parametros de la funcion.
    {
        $query = "insert into producto(codigo,nombre,id_sucursal,id_categoria,cantidad,precio) values ('$producto->codigo','$producto->nombre',$producto->id_sucursal,$producto->id_categoria,$producto->cantidad,$producto->precio)";
        $link = conexion::conecta(); // llamamos a un metodo de otro metodo, SELF, llama a un metodo dentro de la misma clase.
        // Nombre de clase cuando es otra clase.
        mysqli_query($link, $query) or die(mysqli_error($link));

        $nfilas = mysqli_affected_rows($link);

        return $nfilas; // devuelve el numero de filas insertadas.

        mysqli_close($link);
    }

    public function update_producto($producto) // parametros de la funcion.
    {
        $query = "update producto set codigo='$producto->codigo', nombre='$producto->nombre',cantidad=$producto->cantidad,precio=$producto->precio) where id=$producto->id)";
        $link = conexion::conecta(); // llamamos a un metodo de otro metodo, SELF, llama a un metodo dentro de la misma clase.
        // Nombre de clase cuando es otra clase.
        mysqli_query($link, $query) or die(mysqli_error($link));

        $nfilas = mysqli_affected_rows($link);

        return $nfilas; // devuelve el numero de filas insertadas.

        mysqli_close($link);
    }    

    public function buscar_codigo($codigo)
    {
        $query = "";
        $query .= "select a.id_producto, a.codigo,a.nombre,a.id_sucursal,b.nombre_sucursal,c.nombre_categoria,a.id_categoria,a.cantidad,a.precio,a.estado ";
        $query .= " from producto a ";
        $query .= " inner join sucursal b on (a.id_sucursal=b.id_sucursal) ";
        $query .= " inner join categoria c on (a.id_categoria=c.id_categoria) ";
        $query .= " where a.codigo like '%$codigo%' ";

        //$query2 = "select * from tblproducto where codigo = '$parametro' or nombre = '$parametro'";
        $link = conexion::conecta();
        $resultado = mysqli_query($link, $query);
        mysqli_close($link);

        return $resultado;

    }

    public function buscar_nombre($nombre)
    {
        $query = "";
        $query .= "select a.id_producto, a.codigo,a.nombre,a.id_sucursal,b.nombre_sucursal,c.nombre_categoria,a.id_categoria,a.cantidad,a.precio,a.estado ";
        $query .= " from producto a ";
        $query .= " inner join sucursal b on (a.id_sucursal=b.id_sucursal) ";
        $query .= " inner join categoria c on (a.id_categoria=c.id_categoria) ";
        $query .= " where a.nombre like '%$nombre%' ";

        //$query2 = "select * from tblproducto where codigo = '$parametro' or nombre = '$parametro'";
        $link = conexion::conecta();
        $resultado = mysqli_query($link, $query);
        mysqli_close($link);

        return $resultado;

    }

    public function buscar_sucursal($nombre)
    {
        $query = "";
        $query .= "select a.id_producto, a.codigo,a.nombre,a.id_sucursal,b.nombre_sucursal,c.nombre_categoria,a.id_categoria,a.cantidad,a.precio,a.estado ";
        $query .= " from producto a ";
        $query .= " inner join sucursal b on (a.id_sucursal=b.id_sucursal) ";
        $query .= " inner join categoria c on (a.id_categoria=c.id_categoria) ";
        $query .= " where b.nombre_sucursal like '%$nombre%' ";
        $link = conexion::conecta();
        $resultado = mysqli_query($link, $query);
        mysqli_close($link);
        
        return $resultado;

    }

    public function listar_productos()
    {
        $query = "";
        $query .= "select a.id_producto, a.codigo,a.nombre,a.id_sucursal,b.nombre_sucursal,c.nombre_categoria,a.id_categoria,a.cantidad,a.precio,a.estado ";
        $query .= " from producto a ";
        $query .= " inner join sucursal b on (a.id_sucursal=b.id_sucursal) ";
        $query .= " inner join categoria c on (a.id_categoria=c.id_categoria) ";
        $link = conexion::conecta();
        $resultado = mysqli_query($link, $query) or die(mysqli_error($link));
        mysqli_close($link);
        return $resultado;
    }

    public function listar_sucursales()
    {
        $query = "select * from sucursal";
        $link = conexion::conecta();
        $sucursales = mysqli_query($link, $query);
        mysqli_close($link);
        return $sucursales;
    }

    public function listar_categorias()
    {
        $query = "select * from categoria";
        $link = conexion::conecta();
        $categorias = mysqli_query($link, $query);
        mysqli_close($link);
        return $categorias;
    }
}
