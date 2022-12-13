<?php

$array = [19, 12, 13, 29];

$array[] = 18;

echo $array[4];

echo '<br/>';

$data = [

    [
        'nombre' => 'Victor Flores',
        'email' => 'victor@gmail.com',
        'celular' => '22332322'
    ],
    [
        'nombre' => 'maria perez',
        'email' => 'maria@gmail.com',
        'celular' => '22311322'
    ],
    [
        'nombre' => 'Casimira argueta',
        'email' => 'casimira@gmail.com',
        'celular' => '22209322'
    ],
    [
        'nombre' => 'Pepe guardiola',
        'email' => 'pepe@gmail.com',
        'celular' => '22209122'
    ]

];

//echo $data[0]['nombre'];

foreach ($data as $value) {
    echo $value['nombre'] . '<br/>';
}