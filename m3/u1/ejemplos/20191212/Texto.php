<?php

class Texto {
    private $cadena;
    private $numeroVocales;
    private $numeroNoVocales;
            
    function __construct($cadena="") {
        $this->setCadena($cadena);
    }
    public function longitud(){
        return mb_strlen($this->cadena);
    }

     public function getCadena($imprimir=0) {
        $salida="";
        $salida =$imprimir ? "La cadena es " .$this->cadena : $this->cadena;
         return $salida;
         return ($imprimir ? "La cadena es " .$this->cadena : $this->cadena);
    }
    
    public function setCadena($cadena) {
        $this->cadena = $cadena;
        $this->numeroVocales = $this->vocales() ;
        $this->numeroNoVocales = $this->noVocales();
        return $this;
    }
       
    public function getNumeroVocales() {
        return $this->numeroVocales;
    }
    public function getNumeroNoVocales() {
        return $this->numeroNoVocales;
    }

        public function setNumeroVocales($numeroVocales) {
        $this->numeroVocales = $numeroVocales; 
        return $this;
    }
        
    private function vocales() {
     $vocales=['a','e', 'i', 'o', 'u', 'á', 'é', 'í','ó','ú'];
     $salida = 0;
     
     foreach ($vocales as $valor) {
         $salida+= substr_count(mb_strtolower($this->getCadena()), $valor);
     }
     return $salida;
    }
    
    private function noVocales($noVocales) {
        return $this->longitud() - $this->numeroVocales;
    }
    
}
