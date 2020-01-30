<?php
/**
 * Funcion que genera numeros aleatorios 
 * $vMinimo que es el valor minimo, 
 * $vMaximo que es el valor maximo, 
 * $valores cantidad de numeros a generar
 * $salida array donde va a almacenar el resultado
 * 
*/

function arrayAleatorio($vMinimo, $vMaximo, $valores, $salida) {
    $salida=[];
    for($i=0;$i<=$valores;$i++){
        $salida[$i] = mt_rand($vMinimo,$vMaximo);
    } 
    return $salida;
}
$resultado = $salida=[];
$valor = arrayAleatorio(1, 10, 9, $resultado);
var_dump($valor);