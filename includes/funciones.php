<?php

function obtenerServicios() : array{
    try {
        //importar una conexion
        require 'database.php';

        // Escribir el codigo SQL
        $db->set_charset("utf8");
        $sql = "SELECT * FROM servicios;";

        $consulta =mysqli_query($db,$sql);

        // Arreglo vacio
        $servicios = [];

        $i = 0;

        // Obtener resultado
        while($row = mysqli_fetch_assoc($consulta)){
            $servicios[$i]['id'] = $row['id'];
            $servicios[$i]['nombre'] = $row['nombre'];
            $servicios[$i]['precio'] = $row['precio'];

            $i++;
        }
        return $servicios;

    } catch (\Throwable $th) {
        //throw $th;

        var_dump($th);
    }
}

obtenerServicios();