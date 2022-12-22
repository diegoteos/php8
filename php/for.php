<?php

$filas = 10;for ($i = 0; $i <= $filas; $i++) {
    for ($j = 1; $j <= $i; $j++) {
       // echo "*";
    }
    //echo "<br/>";
}

echo "<br/>";

$array = array(
    'vaca',
    'burro',
    'jirafa',
    'elefante',
    'castor',
    
);

foreach ($array as $animal){
    // echo "$animal <br/>";
}// parar una ciclo al cumplir con una condicion

for ($i = 0; $i <= 20; $i++){
    
    echo "$i <br/>";
    
    if ($i == 10){
        break;
    }
}

echo "<br/>";

// continue permite saltarse un ciclo

for ($i = 0; $i <= 20; $i++){
    
    if ($i == 10){
        echo "Este ciclo se omitio <br/>";
        continue;
    }

    echo "$i <br/>";
}// con las funciones die(); o exit(); detenemos completamente la ejecucion del programa

for ($i = 0; $i <= 20; $i++){
    
    if ($i == 10){
        echo "Detenemos la ejecucion <br/>";
        exit();
        //die();
    }

    echo "$i <br/>";
}

echo "hemos cumplido con todo";
