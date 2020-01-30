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
class ElementoPanels {
    protected $Clases;
    protected $Titulo;
    protected $Contenido;
    protected $Pie;
    protected $Columnas;
    
    public function __construct($v) {
        $salida=array_replace([
            "Clases"=>"panel-default",
            "Titulo"=>"Titulo",
            "Contenido"=>"",
            "Pie"=>""
        ], $v);
        
        foreach($salida as $indice=>$valor){
            $this->$indice=$valor;
        }
    }
    public function setColumnas($c) {
        $this->Columnas =$c;
        return $this;
    }

    
    public function render($c="col-lg-12"){
        $elemento= file_get_contents('clases/vistas/Panels');
        $this->setColumnas($c);
        foreach($this as $indice=>$valor){
            $elemento= str_replace("{" . $indice. "}", $valor, $elemento);
        }
        return $elemento;
        }
}
   
    

