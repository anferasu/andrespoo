<?php

function longitud($texto){
    return strlen($texto);
}

function contarVocales($contar) {
    $vocales = 0;
    $contar = strtolower($contar);
    
    for($i=0; $i < longitud($contar) ; $i++){
        if (in_array($contar[$i], ['a','e','i','o','u'])){
            $vocales++;
        }
    }
    return $vocales;
}

function contarnoVocales($noVocales) {
 return longitud($noVocales) - contarVocales($noVocales);
}

function vocalesRepetidas($parametro){
    $parametro = strtolower($parametro);
    $cadena =  (str_split($parametro,1));
    $vocales = ['a','e','i','o','u'];
    $salida = array_filter($cadena, function ($val) use ($vocales){
    return  in_array($val, $vocales);
    });
 
    return array_count_values($salida);   
 }
 
  
$cadena = 'Un texto es una composición de signos codificados en un sistema de escritura que forma una unidad de sentido.';

$vocales = contarVocales($cadena);
$salida = vocalesRepetidas($cadena);

var_dump($vocales);
var_dump($salida);
var_dump(contarnoVocales($cadena));
var_dump(longitud($cadena));



