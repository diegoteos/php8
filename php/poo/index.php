<?php

require_once 'clases/Persona.php';

$persona1 = new Persona("Victor Hernandez", "Arana Flores", 22);

// $persona1->setNombre("Diego Teos");
// $persona1->apellido = "Arana Flores";
// $persona1->edad = 35;


$persona2 = new Persona("Maria Magdalena", "Gonzalez", 22);
// $persona2->setNombre("Lucia Maria");
// $persona2->apellido = "Fuentes Lopez";
// $persona2->edad = 19;

echo '<pre>';
var_dump($persona1);
echo '<br>';
var_dump($persona2);

echo '<br><br>';

echo "El nombre de la persona 1 es: " . $persona1->getNombre();
echo '<br>';
echo "El nombre de la persona 2 es: " . $persona2->getNombre();





