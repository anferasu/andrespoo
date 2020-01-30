<?php

function operacionArray($numeros, $operacion) {
$resultado = 0;    
foreach ($numeros as $numero) {
    if ($operacion == "suma"){
        $resultado += $numero;
    }elseif ($operacion == "resta"){
        $resultado -= $numero;
    }elseif ($operacion == "producto"){    
        $resultado = array_product($numeros);
    }   
 }
 return $resultado;    
}

$numeros = [1, 3, 5];
echo operacionArray($numeros, "producto");
