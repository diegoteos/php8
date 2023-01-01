<?php
class MiPrimeraClase
{
    // Declaración de una propiedad
    public $propiedad = 'Este es un mensaje de la propiedad de la clase MiPrimeraClase';

    // Declaración de un método
    public function mostrarPropiedad() {
        echo $this->propiedad;
    }
}

$propiedades = new MiPrimeraClase;
$propiedades->propiedades;
$propiedades = "hola mundano";
