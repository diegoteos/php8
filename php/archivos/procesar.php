<?php
$nombre = $_REQUEST['name'];
$image = $_FILES['image'];
$sexo = $_REQUEST['sexo'];

$patch = $_SERVER['DOCUMENT_ROOT'] . '/php8/php/archivos/imagenes/' . $image['name'];

echo $nombre . '<br /><br>';
var_dump($image);

echo '<br /><br>';

//echo $patch;
echo 'Tu sexo es: ' . $sexo;
move_uploaded_file($image['tmp_name'], $patch);