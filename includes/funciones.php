<?php

// Funcion para obtener múltiples productos. Requiere la cantidad como parametro.
function obtenerProductos($cantidad) {
    // Importamos la conexion con la bd
    include 'conexion.php';

    // Intentamos hacer la consulta siempre con un try-catch
    try {
        // Se crea el query y se almacena en una variable ($sql)
        $sql = "SELECT * FROM `productos` LIMIT $cantidad";
        // Se hace la consulta y se guarda en una variable ($resultado)
        $resultado = $bd->query( $sql );
    } catch (Exception $e) {
        echo $e->getMessage();
        return array();// retronamos un arreglo vacio. Siempre importa retornar algo para evitar errores
    }
    // Se retorna lo obtenido.
    return $resultado;
}


// Funcion para obtener un solo producto. Requiere el id del producto como parametro.
function obtenerProducto($id) {
     // Importamos la conexion con la bd
     include 'conexion.php';

     // Intentamos hacer la consulta siempre con un try-catch
     try {
         // Se crea el query y se almacena en una variable ($sql)
         $sql = "SELECT nombre, imagen_completa, precio, descripcion, descripcion_corta FROM `productos` WHERE id = $id";
         // echo($sql);

         // Se hace la consulta y se guarda en una variable ($resultado)
         $producto = $bd->query( $sql );
     } catch (Exception $e) {
         echo $e->getMessage();
         return array();// retronamos un arreglo vacio. Siempre importa retornar algo para evitar errores
     }
     // Se retorna lo obtenido.
     return $producto;
}