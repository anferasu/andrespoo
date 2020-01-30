<?php

function crear($menu) {
    $salida=[];
    
    
    foreach ($menu as $nombre => $contenido) {
        $submenu = "<ul id=\"$nombre\">";
        foreach ($contenido as $e => $u) {
            $submenu .= '<li><a href="' . $u . '">' . $e . '</a></li>';
        }
        $submenu .= '</ul>';
        $salida[$nombre]=$submenu;
    }
    
    return $salida;
}

$a=crear([
        "menu1"=>[
            "etiqueta" => "url",
            "etiqueta1" => "url1",
        ],
        "menu2"=>[
            "etiqueta" => "url",
            "etiqueta1" => "url1",
        ],
    ]
);

echo $a["menu1"];
echo $a["menu2"];
