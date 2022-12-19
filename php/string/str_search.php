<?php

$hola = "hola mundo";

var_dump($uno = str_split($hola, 4));
echo '<br/>';
echo '<br/>';
echo '<br/>';

// obtenemos la posicion de la palabra buscada
echo $dos = strpos($hola, 'mundo');


echo '<br/>';

$email = 'guatemala@ejemplo.com';
  echo stristr($email, 'u');

echo '<br/>';

$texto = 'El mundo ha venido siendo lo que notros hemos hecho de el.';
  echo strpbrk($texto, 'mundo');