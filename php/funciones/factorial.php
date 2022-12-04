<?php



function factorial($numero){
    $resultado = 1;
    for ($i=1; $i <= $numero; $i++) { 
        $resultado = $resultado * $i;

    }
    echo "El factorial de $numero es: " . $resultado; 
    //return $resultado;
}
factorial(9);







