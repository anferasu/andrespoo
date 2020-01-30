<?php

namespace clases;

class E6 {
    public $tabla;
    
    public function __construct($tabla) {
        $this->tabla = $tabla;
        $this->getTabla();
    }
    
    public function getResultado() {
         return "<ul><li>La tabla de multiplicar es " . $this->getTabla() . "</li></ul>";
    }


    public function getTabla() {
        for ($i=1; $i<=10; $i++){
           echo $mult = $tabla = $this->tabla . '*'.$i.'='.$this->tabla * $i.'<br/>';
        }
           //return $mult;
      }
 }
