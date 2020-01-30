<?php

namespace clases;

class E4 {
    public $numeros;
    public $areaTriangulo;
    public $perimetro;
    
    public function __construct($numeros) {
        $this->numeros = $numeros;
        $this->setAreaTriangulo();
        
    }
    
    public function getNumeros() {
        return $this->numeros;
    }

    public function getAreaTriangulo() {
        return $this->areaTriangulo;
    }

    public function getPerimetro() {
        return array_sum($this->numeros);
    }

    
    public function setNumeros($numeros) {
        $this->numeros = $numeros;
    }

    public function setAreaTriangulo() {
        $semiperimetro = array_sum($this->numeros)/2;
        $sum2=0;
        for($i=0;$i<count($this->getNumeros());$i++){
	   $sum2+=($semiperimetro-$this->numeros[$i])*($semiperimetro);
      }
      $resultado = sqrt($sum2);
      $this->areaTriangulo = $resultado;
    }

  



    
}
