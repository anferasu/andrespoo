<?php

function operaciones($numero1, $numero2, $operacion) {
    
   $resultado = "";
    if ($operacion == "suma") {
        $resultado = $numero1 + $numero2;
    }elseif($operacion == "resta"){
        $resultado = $numero1 - $numero2;
    }elseif($operacion == "producto"){
        $resultado = $numero1 * $numero2;
    }    
    return $resultado;    
}

echo operaciones(12, 10, "producto");