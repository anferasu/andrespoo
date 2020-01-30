<?php

class Usuario {
    var $nombre='defecto';
    
    function set_usuario() {
        $this->nombre = 'Ramon';
    }
}

$persona =  new Usuario();
$persona->set_usuario();
echo $persona->nombre;
var_dump($persona);
$persona->nombre='Silvia';
var_dump($persona);