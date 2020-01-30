<?php


namespace clases;

class Numeros {
    public $numeros;
    public function __construct($numeros) {
        $this->numeros = $numeros;
    }
    
    public function getNumeros() {
        return $this->numeros;
    }

    
    public function setNumeros($numeros) {
        $this->numeros = $numeros;
        return $this;
    }

        
    public function contarRepetidos() {
        
        $a=[];
        $a = $this->getNumeros();
        $c=array_count_values($a);
        $salida= max($c);
        if($salida>1){
            return  "Hay elementos repetidos";
        }else{
            return "No hay elementos repetidos";            
        }    
    
    }
    
    public function contarCajas() {
                      
        $x="";
        $b= $this->getNumeros();
        $c= count($b);
        $array=[];
        
        foreach ($this->getNumeros() as $v) {
            if(!empty($v)){
               $array[]=$v; 
            }
        }
        
        $a = count($array);
        $x = "Has rellenado " . $a . " cajas de un total de " . $c;
        return $x;       
        }
        
    
    public function escribirFichero(){
    
        $fichero = 'salidas.txt';
        // Abre el fichero para obtener el contenido existente
        $a = $this->contarRepetidos();
        $b = $this->contarCajas();
        $actual =  $a."\n" . $b."\n"  ;
        // Escribe el contenido al fichero
        file_put_contents($fichero, $actual,FILE_APPEND );
        
    }

}
