<?php

namespace clases;

class Punto {
     public $px;
     public $py;
     
     public function __construct($px, $py) {
         $this->px = $px;
         $this->py = $py;
     }
     public function getPx() {
         return $this->px;
     }

     public function getPy() {
         return $this->py;
     }

     public function setPx($px) {
         $this->px = $px;
         return $this;
     }

     public function setPy($py) {
         $this->py = $py;
         return $this;
     }


         
}
