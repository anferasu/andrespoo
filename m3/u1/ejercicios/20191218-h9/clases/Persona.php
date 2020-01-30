<?php

class Persona {
    private $nombre;
    private $apellidos;
    private $nombreCompleto;
    protected $edad;
    
    
    function __construct($nombre, $apellidos, $edad) {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->setNombreCompleto();
        $this->edad = $edad;
    }
    
    public function getNombre() {
        return $this->nombre;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function getNombreCompleto() {
        return $this->nombreCompleto;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    public function setNombreCompleto() {
        $this->nombreCompleto = $this->getNombre() . " " .  $this->getApellidos();
    }

    public function setEdad($edad) {
        $this->edad = $edad;
    }



    
}
