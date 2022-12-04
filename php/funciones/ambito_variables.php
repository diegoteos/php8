<?php

$a = 5;

$b = 10;

function valores(&$n){

    // uso de global para convertir una variable en global 
    //global $a;
    
    $n = $n + 10;
}

valores($a);
valores($b);

echo $a;
echo '<br/>';
echo $b;