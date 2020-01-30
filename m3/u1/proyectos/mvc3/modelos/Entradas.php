<?php
namespace modelos;
class Entradas extends Modelo{
    public $titulo;
    public $texto;
    public $id;
    protected function campos(){
        return "titulo,texto";
    }
    protected function primary(){
        return "id";
    }

}
