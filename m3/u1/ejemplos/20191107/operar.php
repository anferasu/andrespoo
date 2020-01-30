<?php

function suma ($vector){
    $s=0;
    foreach ($vector as $v) {
        $s +=$v;
    }
    return $s;
}

function producto ($vector){
    $s=1;
    foreach ($vector as $v) {
        $s *=$v;
    }
    return $s;
}

function media ($vector){
    $s= suma($vector)/ count($vector);
    return $s;
}

function  operar ($vector,&$salida){
    $salida["suma"] = suma($vector);
    $salida["producto"] = producto($vector);
    $salida["media"] = media($vector);
}



$a=[1,2,3,4,5,6,7];
$s=[];
operar($a,$s);



echo 'El producto es ' . $s["producto"];