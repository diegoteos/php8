<?php

$filas = 10;


for ($i = 0; $i <= $filas; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br/>";
}

echo "<br/>";
echo "<br/>";

$array = array(
    'vaca',
    'burro',
    'jirafa',
    'elefante',
    'castor',

);

foreach ($array as $animal){
    echo "$animal <br/>";
}

