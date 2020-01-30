<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace clases;

/**
 * Description of ElementoPanels
 *
 * @author ramon
 */
class ElementoThumbnails {
    protected $Clases;
    protected $Titulo;
    protected $Contenido;
    protected $Botones;
    protected $Imagen;
    
    public function __construct($v) {
        $salida=array_replace([
            "Titulo"=>"Titulo",
            "Contenido"=>"",
            "Botones"=>"",
            "Imagen"=>""
        ], $v);
        
        foreach($salida as $indice=>$valor){
            $this->$indice=$valor;
        }
    }
    public function setColumnas($c) {
        $this->Clases =$c;
        return $this;
    }

    
    public function render($c="col-lg-12"){
        $elemento= file_get_contents('clases/vistas/Thumbnails');
        $this->setColumnas($c);
        foreach($this as $indice=>$valor){
            $elemento= str_replace("{" . $indice. "}", $valor, $elemento);
        }
        return $elemento;
        }
}
   
    

