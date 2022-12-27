<?php
session_start();

if($_SESSION['Diego'] === 'Diego'){
    echo '<pre>';
    echo "su usuario si existe y es: " . print_r($_SESSION);
} else{
    echo "no son iguales";
}
echo 
'
<a rel="stylesheet" href="cerrar.php">Cerrar</a>
';