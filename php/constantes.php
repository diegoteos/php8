<?php

date_default_timezone_set('America/guatemala');
echo date("d/m/Y H:i:s",);
echo '<br/>';
echo PHP_VERSION;
echo '<br/>';
echo PHP_OS;
echo '<br/>';
echo __FILE__;
echo '<br/>';

// DEFINIMOS UNA CONSTANTE LLAMADA HOLA Y LE ASIGNAMOS EL VALOR 'hola mundo'
define('HOLA', 'hola mundo');

echo HOLA;

echo '<br/>';
echo '<br/>';

$nombre = 'Juan Carlos Plata';
define('NOMBRE', $nombre);

echo NOMBRE;

