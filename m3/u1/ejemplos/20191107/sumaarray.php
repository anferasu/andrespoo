<?php

function sumar ($vector,&$resultado){
    $resultado=0;
    foreach ($vector as $v) {
        $resultado+=$v;
    }
}

$a=[1,2,3,4,5,6,7];
$s=0;
sumar($a,$s);
echo $s;
var_dump($a);
