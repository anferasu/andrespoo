<?php
namespace modelos;
class Entradas{
    public function __toString() {
        $salida="<ul>";
        foreach($this as $campo=>$valor){
            $salida.="<li>$campo: $valor</li>";
        }
        $salida.="</ul>";
        return $salida;
    }

}
