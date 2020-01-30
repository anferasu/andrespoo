<?php

function arrayVocales($cadena){
    $arrVoc = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];	
    $vocal=[];
    for($i = 0; $i<strlen($cadena); $i++){
        for($j = 0 ; $j<count($arrVoc); $j++){
            if($arrVoc[$j] == $cadena[$i]){
                $vocal[] = $cadena[$i];
            }
        }
    }
   
	return $vocal;
}

$cadena1 = "Esto es una cadena";

$d = arrayVocales($cadena1);
var_dump($d);

