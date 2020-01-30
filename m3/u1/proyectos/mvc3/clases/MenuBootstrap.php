<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace clases;

/**
 * Description of MenuBootstrap
 *
 * @author ramon
 */
class MenuBootstrap {
    private $salida;
    private $enlaces;
    private $salidaEnlaces;
    private $clases=[];
    private $enlaceHome;
    private $home;
    private $activo;
    
    public function setActivo($v){
        $this->activo=$v;
        return $this;
    }
    
    public function __construct($links){
        $this->salida= file_get_contents("clases/vistas/menuBootstrap");
        $this->enlaces=$links;
        $this->home="Inicio";
        $this->enlaceHome="#";
    }
    
    private function enlaces(){
        foreach($this->enlaces as $nombre=>$enlace){
            if($nombre==$this->activo){
                $this->salidaEnlaces.="<li class=\"active\"><a href=\"$enlace\">$nombre</a></li>";
            }else{
                $this->salidaEnlaces.="<li><a href=\"$enlace\">$nombre</a></li>";
            }
        }
    }
    
    public function getClases() {
        return implode(" " , $this->clases);
    }

    public function getEnlaceHome() {
        return $this->enlaceHome;
    }

    public function getHome() {
        return $this->home;
    }

    public function setClases($clases) {
        $this->clases[] = $clases;
        return $this;
    }

    public function setEnlaceHome($enlaceHome) {
        $this->enlaceHome = $enlaceHome;
        return $this;
    }

    public function setHome($home) {
        $this->home = $home;
        return $this;
    }

        
    public function render(){
        $this->enlaces();
        $this->salida=str_replace('{clases}',$this->getClases(),$this->salida);
        $this->salida=str_replace('{home}',$this->getHome(),$this->salida);
        $this->salida=str_replace('{enlaceHome}',$this->getEnlaceHome(),$this->salida);
        $this->salida=str_replace('{elementos}',$this->salidaEnlaces,$this->salida);
        return $this->salida;
    }
}
