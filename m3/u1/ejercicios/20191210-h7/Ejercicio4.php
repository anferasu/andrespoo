<?php
/*
 * Funcion que genera codigos de los colores, 
 * convertiendo en un array 
 * $cantidad cantidad de colores a generar
 * $opcional con valor a true indica que tiene que colocar al principio un "#", si $opcional es false lo quita
 * y colocando la salida en un array
 */
function randomColor($cantidad,$opcional=true){
    $result = [];
    for($i=0; $i<=$cantidad; $i++){
        $tamano=6;
        $result[$i] = "";
        if ($opcional){
           $result[$i] = "#";
           $tamano=7;
        }   
        for ($c=1; $c<$tamano; $c++){
          $rand = mt_rand(0, 15);
          $result[$i] .= dechex($rand);   
        }
              
    }
    return $result;
}
 
$miColor = randomColor(9,false);
var_dump($miColor);
