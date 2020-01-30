<?php
class Camion extends Vehiculo {

    private $carga;
    
    public function cargar ($cantidad_a_cargar){
        $this->carga=$cantidad_a_cargar;
        echo 'Se ha cargado cantidad: ' . $cantidad_a_cargar . '<br />';
    }
    
    public function verificar_encendido(){
        if ($this->encendido == true){
            echo 'Camion encendido <br />';
        }else{
            echo 'Camion apagado <br />';
        }
    }
}
