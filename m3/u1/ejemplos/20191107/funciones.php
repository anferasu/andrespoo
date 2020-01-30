<?php

function sumar ($vector,&$resultado){
    $resultado=0;
    foreach ($vector as $v) {
        $resultado+=$v;
    }
}

