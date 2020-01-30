<?php

echo '<div class="listado">';
foreach ($this->contenido as $indice => $registro) {

    echo "<ul>";
    foreach ($registro as $campo => $valor) {
        echo "<li>$campo: $valor</li>";
    }
    echo '<li><a href="' . $this->crearRuta(["controlador"=>"noticias","accion" => "editar", "parametros" => "Id=" . $registro['Id']]) . '"><img src=" ' . $this->urlBase . '/imgs/editar.png"></a></li>';
    echo '<li><a href="' . $this->crearRuta(["controlador"=>"noticias","accion" => "eliminar", "parametros" => "Id=" . $registro['Id']]) . '"><img src=" ' . $this->urlBase . '/imgs/eliminar.png"></a></li></ul>';
}
echo "</div>";
