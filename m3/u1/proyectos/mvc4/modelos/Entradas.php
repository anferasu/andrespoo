<?php
namespace modelos;
class Entradas extends Modelo{
    protected function campos(){
        return "titulo,texto,foto,portada";
    }
    protected function primary(){
        return "id";
    }

}
