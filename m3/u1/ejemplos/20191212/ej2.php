<?php

//function __autoload($nombre_clase) {
//    include $nombre_clase . ".php";
//}

spl_autoload_register(function ($nombre_clase) {
 
    include $nombre_clase . ".php";
 
});

use clases\Vector;
use clases\Numeros;

$a=new Vector([1,2,3,4,5,6,7]);
$a->imprimirValores();
echo "El valor Maximo es: " . $a->getMaximo();
echo "La moda es : " . $a ->getModa();

$b= new Numeros([2,2,2,2,2,2,2,10,10,10,1,1,1,1,1,10,10,10,10]);
//$b->setModa();
echo "la moda es";
var_dump($b->getModa());
//$b->setMedia();
echo "La media es : " . $b -> getMedia();
var_dump($b);

$b->setValores([1,2,14]);
var_dump($b);
