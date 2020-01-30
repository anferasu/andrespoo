<?php

namespace clases;

/**
 * Description of Fotos
 *
 * @author ramon
 */
class Fotos {
    private $clases;
    private $nombre;
    private $ruta;
    private $efecto;
    private $salida;
    
    public function __construct($v=[]){
        $elementos=array_replace([
            "clases"=>"img-responsive",
            "nombre"=>"nada.png",
            "ruta"=>"/imgs/",
            "animacion"=>"zoomIn"
        ], $v);
        $this->efecto=$elementos["animacion"];
        $this->ruta=$elementos["ruta"];
        $this->nombre=$elementos["nombre"];
        $this->clases=explode(" ",$elementos["clases"]);
    }
    
    public function setClases($clases) {
        $this->clases[] = $clases;
        return $this;
    }

    public function getClases() {
        return implode(" ",$this->clases);
    }
    
    public function render(){
        if(empty($this->nombre)){
            $this->nombre="nada.png";
        }
        $this->salida='<img src="' . Aplicacion::$urlBase . $this->ruta . $this->nombre . '" class="' . $this->getClases() . '" data-av-animation="' . $this->efecto .'">';
        return $this->salida;
    }


}
