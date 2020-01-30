<?php

namespace clases;

class Panels {
    private $clases;
    private $elementos=[];
    private $columnas;
    
    public function __construct($c=1) {
        $this->setColumnas($c);
    }
    
    public function setColumnas($c){
        $this->columnas=$c;
        $resultado=12/$c;
        $this->columnas="col-md-$resultado";
        return $this;
    }
    
    public function añadirElemento(ElementoPanels $v){
        $this->elementos[]=$v;
        return $this;
    }
    
    
    public function render(){
        $salida='<div class="container">';
        foreach($this->elementos as $elemento){
            $salida.=$elemento->render($this->columnas);
        }
        return $salida . "</div>";
    }

}
