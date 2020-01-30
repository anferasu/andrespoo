<?php

namespace clases;

class Cuadro_1{
    public $p1;
    public $p2;
    public $color;

    public function getColor() {
        return $this->color;
    }

    public function setColor($color) {
        $this->color = $color;
        return $this;
    }

    
    public function __construct(Punto $p1, Punto $p2) {
        $this->setP1($p1);
        $this->setP2($p2);
    }

    public function getP1() {
        return $this->p1;
    }

    public function getP2() {
        return $this->p2;
    }

    public function setP1(Punto $p1) {
        $this->p1 = $p1;
    }

    public function setP2(Punto $p2) {
        $this->p2 = $p2;
    }

        
    private function ancho(){
        return $this->getP2()->px - $this->getP1()->px;
    }
    
      private function alto(){
        return $this->getP2()->py + $this->getP1()->py;
    }
    

 public function dibujarCuadro(){
       $salida = '<svg>';
        $salida.= '<rect ';
        
        $adicionar = [
                     "rx"=>20,
                     "ry"=>20,];                
        $vector = [
          "x" => $this->getP1()->px,
          "y" => $this->getP1()->py,
          "width" => $this->ancho(),
          "height" => $this->alto(),
          //"width" => 100,  
          //"height" => 400,  
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
