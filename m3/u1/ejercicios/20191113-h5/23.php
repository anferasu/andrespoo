<?php
//funcion que compara dos arreglos y muestra las coincidencias
function compararArreglo($arreglo1, $arreglo2) {
    $resultado=0;
    foreach ($arreglo1 as $value1) {
        foreach ($arreglo2 as $value2) {
            if ($value1 == $value2){
               $resultado++; 
            }
        }
    }
    return $resultado;
}


$array1=array ("vaso", "plato", "bandeja", "botella","raton");
$array2=array ("bandeja", "vaso", "cuchillo","perro","raton");

echo compararArreglo ($array1,$array2);