<?php
namespace modelos;
class Entradas extends Modelo{
    public $titulo;
    public $texto;
    protected function campos(){
        return "titulo,texto";
    }

}
