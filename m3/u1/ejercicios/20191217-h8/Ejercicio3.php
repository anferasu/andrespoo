<?php

class Usuario {
    var $nombre = 'defecto';
    private $edad;
    protected $telefono;
    private $apellidos= 'defecto';
    private $nombreCompleto;
            
    function getNombre() {
        return $this->nombre;
    }

    function getEdad() {
        return $this->edad;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function getApellidos() {
        return $this->apellidos;
    }

    function getNombreCompleto() {
        return $this->nombreCompleto;
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

    function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
        $this->concatenar();
    }

    function concatenar() {
        $this->nombreCompleto = $this->nombre . "" . $this->apellidos;
    }
}

$persona = new Usuario();
echo $persona->nombre;
$persona->setEdad(51);
$persona->setTelefono('21222222');
$persona->setApellidos(" " . 'perez perez');
var_dump($persona);
$persona->nombre='Ramon';
var_dump($persona);
$persona->setNombre('Ramon');
$persona->setApellidos(" " . 'perez perez');
var_dump($persona);
