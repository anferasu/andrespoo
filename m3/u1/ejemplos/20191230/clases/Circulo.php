<?php
namespace clases;

class Circulo{
    
    public $centro;
    public $color;
    
    public function getColor() {
        return $this->color;
    }

    public function setColor($color) {
        $this->color = $color;
        return $this;
    }

        
    public function getCentro() {
        return $this->centro;
    }

    public function setCentro(Punto $centro) {
        $this->centro = $centro;
        return $this;
    }

           
    public function __construct(Punto $centro) {
        $this->setCentro($centro);
    }

       
    public function dibujar(){
        $salida='<svg>';
        $salida.='<circle ';
        $vector = [
          "cx" => $this->getCentro()->px,
          "cy" => $this->getCentro()->py,
          "r" => 50,
          "Stroke" => "black",
          "stroke-width" => 3,
          "fill"=> $this->getColor(),  
        ];  
        
             
        foreach ($vector as $k => $v) {
              $salida.= $k . '=' . ' "' .$v . '"';
        }
        
        $salida.=' />';
        $salida.='</svg>';
        
        return $salida;
    }
    
}
