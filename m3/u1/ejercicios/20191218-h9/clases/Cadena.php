<?php

class Cadena {
    private $valor;
    private $longitud;
    private $vocales;
    
    public function __construct($valor) {
        $this->valor = $valor;
    }
    
    public function getValor($minusculas=false) {
        if ($minusculas){
            return strtolower($this->valor);
        }else{
            return $this->valor;
        }
    }

    public function getLongitud() {
        $this->calcularLongitud();
        return $this->longitud;
    }

    public function getVocales() {
        $this->numeroVocales();
        return $this->vocales;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }

    public function setLongitud($longitud) {
        $this->longitud = $longitud;
    }

    public function setVocales($vocales) {
        $this->vocales = $vocales;
    }

    private function calcularLongitud() {
        $this->setLongitud(strlen($this->valor));        
    }
    
    private function numeroVocales(){
        $vocales = [
            'a',
            'e',
            'i',
            'o',
            'u',
        ];    
        
        $longitud=0;
        foreach ($vocales as $value) {
            $longitud+= substr_count(($this->getValor(1)),$value);            
        }
        return $this->setVocales($longitud);
       // var_dump($longitud);
    }
        
    public function repeticionVocal($vocal){
        $longitud=0;
        $longitud+= substr_count(($this->getValor(1)),$vocal);            
        return $longitud;
    }
    
}

$valor='Esta es una prueba';
$cadena = new Cadena($valor);
echo "La longitud de la cadena es: " . $cadena->getLongitud(). '<br />';
echo $cadena->getValor(true) . '<br />';
echo "El numero de vocales es: " . $cadena->getVocales() . '<br />';
echo $cadena->repeticionVocal('a');


