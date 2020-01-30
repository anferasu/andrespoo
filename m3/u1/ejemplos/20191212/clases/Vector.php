<?php

namespace clases;
class Vector {
    
    public function __construct($valores=[]) {
        $this->setValores($valores);
    }

    
    public function getMaximo() {
        return $this->maximo;
    }

    private function setMaximo() {
        $this->maximo = max($this->getValores());
    }

        
    public function getValores() {
        return $this->valores;
    }
    
    public function imprimirValores(){
        var_dump($this->getValores());
    }

    public function setValores($valores) {
        $this->valores = $valores;
        $this->setModa();
        $this->setMaximo();
       
    }
    
    private function setModa(){
        $this->moda=1;
    }
     
    public function getModa(){
        return $this->moda;
    }
    
        private $valores;
        protected $moda;
        private $maximo;
       
    
}

