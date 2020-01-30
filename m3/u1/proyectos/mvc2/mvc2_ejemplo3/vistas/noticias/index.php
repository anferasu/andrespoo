<?php
var_dump($this->contenidoArray);
var_dump($this->contenidoModelo);

foreach($this->contenidoArray as $indice=>$registro){
    echo "Registro $indice";
    echo "<ul>";
    foreach($registro as $campo=>$valor){
        echo "<li>$campo: $valor</li>";
    }
    echo "</ul>";
}

foreach($this->contenidoModelo as $indice=>$registro){
    echo "Registro $indice";
    echo $registro;
}