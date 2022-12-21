<?php
$nombre = $_REQUEST['name'];
$image = $_FILES['image'];

$patch = $_SERVER['DOCUMENT_ROOT'] . '/php8/php/archivos/imagenes/' . $image['name'];

echo $nombre . '<br /><br>';
var_dump($image);

echo '<br /><br>';

//echo $patch;

move_uploaded_file($image['tmp_name'], $patch);