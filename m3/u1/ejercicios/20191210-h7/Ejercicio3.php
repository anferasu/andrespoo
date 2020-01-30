<?php
/*
 * Funcion que genera codigos de los colores, 
 * $cantidad el numero de colores a generar
 * convertiendo en un array y colocando la cantidas de indices del array
 */
function randomColor($cantidad){
    $result = [];
    $tamano=7;
    for($i=0; $i<=$cantidad; $i++){
        $result[$i] = "#";
        for ($c=1; $c<$tamano; $c++){
          $rand = mt_rand(0, 15);
          $result[$i] .= dechex($rand);   
        }
              
    }
    return $result;
}
 
$miColor = randomColor(9);
var_dump($miColor);
