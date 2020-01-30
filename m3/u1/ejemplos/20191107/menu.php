<?php

function crearMenu($menu) {
    $salida="<ul>";  
    foreach ($menu as $v => $u) {
        $salida.='<li><a href="'. $u .'">' . $v .'</a></li>';
    }
    $salida.='</ul>';
    return $salida;
    }

    echo crearMenu ([
        "etiqueta"=>"url",
        "etiqueta1"=>"url", 
    ]);
    
    