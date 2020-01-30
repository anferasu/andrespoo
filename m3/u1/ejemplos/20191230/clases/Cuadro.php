<?php

namespace clases;

class Cuadro{
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
 
    public function dibujarCuadro(){
        
        
        $salida = '<svg>';
        $salida.= '<rect ';
        
        $adicionar = [
                     "rx"=>20,
                     "ry"=>20,];                
        $vector = [
          "x" => $this->getCentro()->px,
          "y" => $this->getCentro()->py,
          //"width" => $this->ancho(),
          //"height" => $this->alto(),
          "width" => 100,  
          "height" => 100,  
          "Stroke" => "black",
          "stroke-width" => 1,
          "fill"=> $this->getColor() , 
        ];  
        
        if (isset($_POST['check'])){
            $variable = $_POST['check'];
            $array = array_merge($vector,$adicionar);     
            foreach ($array as $k => $v) {
              $salida.=  $k . '=' . '"' .$v . '"';
            }
            }else{
            foreach ($vector as $k => $v) {
              $salida.=  $k . '=' . '"' .$v . '"';
            }
         }
           
        $salida.= ' />';
        $salida.= '</svg>';
        return $salida;
    }
 }
