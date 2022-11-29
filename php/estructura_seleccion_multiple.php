<?php
// las estructuras de seleccion multiple permite comparar el valor de una variable entre tantos casos posibles

// SWITCH
$dia = 11;
switch ($dia) {
    case '1':
        echo 'Hoy es lunes';
        break;
    case '2':
        echo 'Hoy es martes';
        break;
    case '3':
        echo 'Hoy es miercoles';
        break;
    case '4':
        echo 'Hoy es jueves';
        break;
    case '5':
        echo 'Hoy es viernes';
        break;
    case '6':
        echo 'Hoy es sabado';
        break;
    case '7':
        echo 'Hoy es domingo';
        break;
    
    default:
        echo 'No es un valor correcto';
        break;
}

echo '<br/>';

echo match($dia){
    1 => 'Hoy es lunes',
    2 => 'Hoy es martes',
    3 => 'Hoy es miercoles',
    4 => 'Hoy es jueves',
    5 => 'Hoy es viernes',
    6 => 'Hoy es sabado',
    7 => 'Hoy es domingo',
    default => 'No es un valor correcto'
};