<?php
namespace modelos;
class Noticias extends Modelo{
    protected function campos(){
        return "Titulo,TextoCorto";
    }
    protected function primary(){
        return "Id";
    }

}
