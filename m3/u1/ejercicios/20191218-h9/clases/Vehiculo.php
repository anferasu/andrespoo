<?php
class Vehiculo {
    public $matricula;
    private $color;
    protected $encendido;
    
    public function encender(){
        $this->encendido = true;
        echo 'Vehiculo encendido <br />';
    }
    
    public function apagar(){
        $this->encendido = false;
        echo 'Vehiculo apagado <br />';
    }
}
