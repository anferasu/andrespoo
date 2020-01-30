<?php

$a=[1,2,4,5,6,7,1];
$b=[];
var_dump($b);
foreach ($a as $v) {
    if(isset($b[$v])){
        $b[$v]++;
    }else{
        $b[$v]=1;
    }
}
$c=array_count_values($a);
$salida= max($c);
if($salida>1){
    echo "hay repes";
}

var_dump($b);
var_dump($c);