<?php

$i = 1;
/*
while ($i <= 10) {
    echo "Hola mundo <br/>";
    $i++;
}

echo 'Has finalizado <br/>';

do {
    echo 'Hola mundo <br/>';
    $i ++;
} while ($i < 10);

echo 'Has finalizado nuevamente <br/>';

*/

$base = 5;
$exp = 4;
$i = 1;
$resultado = 1;
while ($i <= $exp) {
$resultado = $resultado * $base;
$i ++;
}
echo $resultado;