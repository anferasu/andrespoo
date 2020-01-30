
<?php
/**
 * Funcion que genera numeros aleatorios en un array  
 * $vMinimo valor minimo, 
 * $vMaximo valor maximo y 
 * returna la cantidad de numeros solicitados
*/

function arrayAleatorio($vMinimo, $vMaximo, $valores) {
    $salida=[];
    for($i=0;$i<=$valores;$i++){
        $salida[$i] = mt_rand($vMinimo,$vMaximo);
    } 
    return $salida;
}

$valor = arrayAleatorio(1, 10, 9);
var_dump($valor);