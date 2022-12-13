<?php

$nombres = array(
    '0' => 'juana',
    '1' => 'juan',
    'daniel',
    'pedro',
    'mario'
);

// le asignamos nuevo indice a nuestro array
list($z, $a, $b, $c, $d) = $nombres;

echo $a;

echo '<br/><br/>';

$llenar = range(1, 10);

var_dump($llenar);

echo '<br/><br/>';

echo count($llenar);


echo '<br/><br/>';

// buscamos un valor dentro de un array

$buscar = 'mario';
if ($nombre = in_array($buscar, $nombres)) {
    $posicion = array_search($buscar, $nombres);
    echo 'si existe el nombre: ' . $nombres[$posicion] . ' en el array de nombres en la posicion: ' . $posicion;
} else {
    echo "El valor buscado no se encuentra";
}

echo '<br/><br/>';

// eliminamos un valor de un array

unset($nombres[4]);

echo '<br/><br/>';

// repetimos la busqueda
$buscar = 'mario';
if ($nombre = in_array($buscar, $nombres)) {
    $posicion = array_search($buscar, $nombres);
    echo 'si existe el nombre: ' . $nombres[$posicion] . ' en el array de nombres en la posicion: ' . $posicion;
} else {
    echo "El valor buscado no se encuentra";
}

