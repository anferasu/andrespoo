<?php
echo '<div class="listado">';
foreach($this->contenidoArray as $indice=>$registro){
   
    echo "<ul>";
    foreach($registro as $campo=>$valor){
        echo "<li>$campo: $valor</li>";
    }
    echo '<li><a href="'. $this->crearRuta(["accion"=>"editar","parametros"=>"id=" . $registro['id']]) .'"><img src=" ' . $this->urlBase .'/imgs/editar.png"></a></li>';
    echo '<li><a href="'. $this->crearRuta(["accion"=>"eliminar","parametros"=>"id=" . $registro['id']]) .'"><img src=" ' . $this->urlBase .'/imgs/eliminar.png"></a></li></ul>';
}
echo "</div>";
