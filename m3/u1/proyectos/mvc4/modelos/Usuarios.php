<?php

namespace modelos;

class Usuarios extends Modelo{
    protected function campos(){
        return "nombre,login,password,direccion,foto";
    }
    protected function primary(){
        return "id";
    }
}
