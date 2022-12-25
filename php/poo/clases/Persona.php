<?php

// creamos una clase

class Persona
{
    // propiedades (variables)
    public $nombre, $apellido, $edad; // se puede dejar en una sola linea o una propiedad en cada linea

    // constructor el cual se ejecuta cuando instanciamos

    // public function __construct($nombre, $apellido, $edad){
    //     $this->nombre = strtolower($nombre);
    //     $this->apellido = strtolower($apellido);
    //     $this->edad = $edad;
    // }

    // los objetos tienen propiedades y metodos



    // metodos (funciones)

    public function setNombre($nombre){
        $this->nombre = strtolower($nombre);
    }

    public function getNombre(){
        return ucwords($this->nombre);    
    }
    }

    class Peruano extends Persona{
        public $departamento, $ciudad;
    }
    class Guatemalteco extends Persona{
        public $provincia, $ciudad;
    }
    





