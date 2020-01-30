<?php

class Vehiculo {
    public $matricula;
    private $color;
    protected $encendido;
    public static $ruedas=5;
            
    function __construct($matricula="", $color="", $encendido=false) {
        $this->matricula = $matricula;
        $this->color = $color;
        $this->encendido = $encendido;
    }
    
    public function encender() {
        $this->encendido = true;
        echo 'Vehiculo encendido <br />';
    }

    public function apagar() {
        $this->encendido = false;
        echo 'Vehiculo apagado <br />';
    }
    
    static function mensaje(){
        echo 'Este es mi coche <br />';
    }
    
    static function ruedas(){
        echo Vehiculo::$ruedas;
    }
    
}