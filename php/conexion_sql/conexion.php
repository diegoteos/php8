<?php

function conexion()
{


    $servidor = 'localhost';
    $db = 'vacunas';
    $usuario = 'root';
    $contraseña = '';

    $conexion = mysqli_connect($servidor, $usuario, $contraseña, $db);

    if ($conexion) {
        return $conexion;
    } else {
        echo "Error en la conexion";
    }
}
