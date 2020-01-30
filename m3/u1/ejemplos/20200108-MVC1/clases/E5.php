<?php
namespace clases;

class E5 {
    public $dia;
    
    public function __construct($dia) {
        $this->dia = $dia;
        $this->getDia();
    }
    
     public function getResultado(){
        return "<ul><li>El dia de la semana es " . $this->getDia() . "</li></ul>";
            
    }
    
    
    public function getDia() {
        $fechats = strtotime($this->dia);
      switch (date('w', $fechats)){
        case 0: return "Domingo"; break;
        case 1: return "Lunes"; break;
        case 2: return "Martes"; break;
        case 3: return "Miercoles"; break;
        case 4: return "Jueves"; break;
        case 5: return "Viernes"; break;
        case 6: return "Sabado"; break;
      }
        return $this->dia = $fechats;
     }
   }

