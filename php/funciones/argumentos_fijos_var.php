<?php

function valoracion($curso, $valoracion = 0)
{ // le asignamos un valor por defecto a la variable valoracion para que no muestre error si el parametro no esta definido

    echo "El curso $curso tiene una valoracion de $valoracion";
}

valoracion("PHP desde cero", 4);

echo '<br/>';
echo '<br/>';


function concatenar(...$palabras)
{
    echo "Los argumentos o parametros recibidos fueron: " . count($palabras) . ' y son los siguientes: <br/>';
    $resultado = "";

    foreach ($palabras as $palabrasRecibidas) {

        $resultado .= $palabrasRecibidas . "<br/> ";
        
        }

    echo $resultado;
}

concatenar("uno", "dos", "tres", "cuatro", 'cinco', 'seis');
