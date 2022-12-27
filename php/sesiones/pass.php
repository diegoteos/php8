<?php


$contraseña = "Hola mundo";

$nuevaContraseña = password_hash($contraseña, PASSWORD_DEFAULT);

echo $nuevaContraseña;
echo '<br /><br /><br /><br /><br /><br>';

$hash = '$2y$10$YVcy3t4Mp6yJnA7yYHtCQe9qgwud0QfMP7nB3HvZtlkHMkl.Kg/R.';


if (password_verify($contraseña, $hash)){
echo "Si son igualitas: ";
session_start();
$usuario = "Diego";
$_SESSION['Diego'] = $usuario;
$us = $_SESSION['Diego'];

if ($_SESSION)
    {
        echo "su usuario es: " . $us;
        header ('Location: ver.php');
    }
} else {
    echo 'La contraseña no es válida.';
}






