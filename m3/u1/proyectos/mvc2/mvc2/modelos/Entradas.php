<?php
namespace modelos;
class Entradas{
    public $tituloCorto;
    public function __construct() {
        $this->tituloCorto= substr($this->titulo, 0,10);
    }
   

    
}
