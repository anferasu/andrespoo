<?php

class Numeros {

    private $imprimir;
            
    function __construct($imprimir) {
        $this->setImprimir($imprimir);
    }

    public function getImprimir() {
        $this->ordenar();
        return $this->imprimir;
    }

    public function setImprimir($v) {
        $this->imprimir = $v;
    }
    
    public function ordenar(){
         sort($this->imprimir,SORT_NUMERIC);
    }
}





