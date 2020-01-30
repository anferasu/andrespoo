<?php

namespace clases;

class Collapse {
    private $salida;
    private $nombre;
    private $elemento;
    private $elementos=[];
    private $activo;
    
    public function __construct($n="accordion",$activo=0) {
        $this->elemento= file_get_contents('clases/vistas/collapse');
        $this->nombre=$n;
        $salida='<div class="panel-group" id="'. $n .'">';
        $this->activo=$activo;
    }
    
    public function añadirElemento($v){
        $a=str_replace("{id}", $this->nombre, $this->elemento);
        $a= str_replace("{titulo}", $v["Titulo"], $a);
        $a= str_replace("{contenido}", $v["Contenido"], $a);
        $numero=$this->nombre . count($this->elementos);
        if(count($this->elementos)==$this->activo || $this->activo==-1){
            $a= str_replace("{abierto}","in", $a);
        }
        $a= str_replace("{href}", $numero, $a);
        $this->elementos[]=$a;
    }
    
    public function render(){
        return $this->salida . implode(" ", $this->elementos) . "</div>";
    }

}
