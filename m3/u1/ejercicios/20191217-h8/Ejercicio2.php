<?php

class Usuario {
    var $nombre = 'defecto';
    private $edad;
    protected $telefono;
    
    function getNombre() {
        return $this->nombre;
    }

    function getEdad() {
        return $this->edad;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setEdad($edad) {
        $this->edad = $edad;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }
}

$persona = new Usuario();
echo $persona->nombre;
$persona->setEdad(51);
$persona->setTelefono('21222222');
var_dump($persona);
$persona->nombre='Silvia';
$persona->setEdad(12);
$persona->setTelefono('11111111');
var_dump($persona);
