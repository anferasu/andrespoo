<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace clases;

class Bd {
    
    private $conexion;
    
    public function __construct() {
        $this->conexion = new \mysqli("localhost", "root", "", "pruebaphp1");
        $this->conexion->query("SET NAMES 'UTF8'");
    }
   
   public function consulta ($c="select * from mensajes") {
       return $this->conexion->query($c)->fetch_all(MYSQLI_ASSOC);
   }
   
   public function getMensaje() {
       return $this->consulta()[random_int(0,4)]["texto"];
   }
   
}
