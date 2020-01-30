<?php

$a = [1,3,4,5,6];
$b = [3,7,9,0];
$c=[2,4];

function suma($a,$b,$c){
    return $a+$b+$c;
}

$d = array_map("suma", $a, $b, $c); 

var_dump($d);
var_dump($a,$b,$c);



$d=array_map(function($a1,$a2,$a3){
    return $a1+$a2+$a3;
},$a,$b,$c);

var_dump($d);
var_dump($a,$b,$c);
