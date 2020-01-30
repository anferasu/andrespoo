<?php

function ordenarArreglo(&$vector) {
    for($c=0;$c<count($vector)-1;$c++){
        for($c1=$c+1;$c1<count($vector);$c1++){
            if($vector[$c]>$vector[$c1]){
                $aux=$vector[$c];
                $vector[$c]=$vector[$c1];
                $vector[$c1]=$aux;
            }
        }
    }
 }
 
 function ordenarArreglo1($vector) {
    for($c=0;$c<count($vector)-1;$c++){
        for($c1=$c+1;$c1<count($vector);$c1++){
            if($vector[$c]>$vector[$c1]){
                $aux=$vector[$c];
                $vector[$c]=$vector[$c1];
                $vector[$c1]=$aux;
            }
        }
    }
    return $vector;
 }

$frutas =[
  'pera', 
  'manzana', 
  'uva', 
  'platano', 
  'fresa', 
  'cereza',  
];

$frutas1=$frutas;
// que me lo ordene el
sort($frutas);
var_dump($frutas);


//ordenarlo yo con funcion que paso argumentos por valor
$frutas2=ordenarArreglo1($frutas1);

echo "sin ordenar<br>";
var_dump($frutas1);

echo "ordenado<br>";
var_dump($frutas2);

//ordenarlo yo

ordenarArreglo($frutas1);

var_dump($frutas1);