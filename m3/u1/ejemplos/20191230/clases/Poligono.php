<?php

namespace clases;

class Poligono {
    public $coordenadas;
    public $color;
    
    public function getColor() {
        return $this->color;
    }

    public function setColor($color) {
        $this->color = $color;
        return $this;
    }

    
    public function __construct($puntos) {
         $this->coordenadas = $puntos;
      
        
    }
    public function getCoordenadas() {
        return $this->coordenadas;
    }
    
    public function getPuntos(){
        return $this->getCoordenadas()[0];
    }
    

    public function setCoordenadas($coordenada) {
        $this->coordenadas = $coordenada;
    }

public function dibujarPoligono(){
        $salida = '<svg>';
        $salida.='<polygon ';
        $vector1 = [
          "points" => $this->getPuntos(),
          "Stroke" => "black",
          "stroke-width" => 1,
          "fill"=> $this->getColor(), 
        ];  
                 
        foreach ($vector1 as $key => $valor) {
             $salida.=  $key . '=' . '"' .$valor . '"';
        }
        $salida.= ' />';        
        $salida.= '</svg>';
        return $salida;
    }
    
}
