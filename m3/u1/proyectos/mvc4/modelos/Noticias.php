<?php

namespace modelos;

class Noticias extends Modelo{
    protected function campos(){
        return "titulo,texto";
    }
    protected function primary(){
        return "id";
    }
}
