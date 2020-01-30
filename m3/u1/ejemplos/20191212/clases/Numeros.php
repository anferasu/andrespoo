<?php

namespace clases;

class Numeros extends Vector {
    private $media;
    
    public function setModa() {
        $salida= array_count_values($this->getValores());
        //arsort($salida);
        //var_dump($salida);
        $maximo=max($salida);
        $this->moda=[];
        foreach ($salida as $numeros=>$repeticiones) {
            if($repeticiones==$maximo){
                $this->moda[]=$numeros;
            }
        }
        
        //$this->moda=15;
    }
  
    public function getMedia() {
        return $this->media;
    }
    
    private function setMedia() {
        $this->media = array_sum($this->getValores())/count($this->getValores());
    }
    
    public function setValores($valores) {
        parent::setValores($valores);
        $this->setMedia();
        $this->setModa();
    }
    
    public function __construct($valores) {
        parent::__construct($valores);
        $this->setModa();
        $this->setMedia();
    }
    
}
