<?php

class Autobus extends Vehiculo {
    
    private $pasajeros;
    
    public function subir_pasajeros($cantidad_pasajeros) {
        $this->pasajeros = $cantidad_pasajeros;
        echo 'Se han subido ' . $cantidad_pasajeros . '<br />' ;
    }
    
    public function verificar_encendido(){
        if ($this->encendido == true) {
            echo 'Autobus encendido <br />';
        }else{
            echo 'Autobus apagado <br />';
        }
    }
}
