<?php

class Entradas {
    public $textoCompleto;
    public function __construct() {
        $this->textoCompleto=$this->titulo . " " . $this->texto;
    }

}
