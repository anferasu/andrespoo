<?php

class Vehiculo1 {
    public $matricula;
    public $color;
    public $encendido;
    
    public function __construct() {
        $argumentos = func_get_args();
        $numeroArgumentos = func_num_args();
        $this->setMatricula("");
        $this->setEncendido("");
        $this->setColor("");
        if (method_exists($this, $f = '__construct' . $numeroArgumentos)) {
            call_user_func_array(array($this, $f), $argumentos);
        }
        //call_user_func("__construct" . func_num_args(), func_get_args());
    }
                
    function __construct1($matricula) {
        $this->setMatricula($matricula);
    }
    
    function __construct2($matricula, $color) {
        $this->setMatricula($matricula);
        $this->setColor($color);
    }
        
    function __construct3($matricula, $color, $encendido) {
        $this->setMatricula($matricula);
        $this->setColor($color);
        $this->setEncendido(false);
    }
         
    public function getMatricula() {
        return $this->matricula;
    }

    public function getColor() {
        return $this->color;
    }

    public function getEncendido() {
        return $this->encendido;
    }
    public function setMatricula($matricula) {
        $this->matricula = $matricula;
        return $this;
    }

    public function setColor($color) {
        $this->color = $color;
        return $this;
    }

    public function setEncendido($encendido) {
        $this->encendido = $encendido;
        return $this;
    }
   
    public function encender() {
        $this->encendido = true;
        echo 'Vehiculo encendido <br />';
    }

    public function apagar() {
        $this->encendido = false;
        echo 'Vehiculo apagado <br />';
    }
        
}
