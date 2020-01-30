<?php

function crearCajas() {
    $cajas =[
    'nombre' => 'Nombre',
    'apellidos' => 'Apellidos',
    'edad' => 'Edad',    
    ];
    echo '<div class="col-md-9">';
       foreach ($cajas as $indice => $valor) {
            echo '<label for="'.$indice.'">'. $valor .' </label><input id="'.$indice.'" type="text" name="' . $indice .'" /> <br />';
       }
    echo '</div>';   
    }

function crearRadio() {
    $sexo =[
    'MA' => 'Hombre',
    'FE' => 'Mujer',
     ];
    echo '<div class="col-md-9">'; 
    foreach ($sexo as $indice => $valor) {
        echo  '<label>' . $valor . '</label><input type="radio" value="'. $indice . ' ?>" name="sexo[] " />';        
    }
    echo '</div>'; 
}

function crearMultiple() {
$aficion =[
    'DL' => 'Deportes al aire libre',
    'DA' => 'Deportes de aventuras',
    'MP' => 'Musica Pop',
    'MA' => 'Musica Alternativa',
    'FO' => 'Fotografia',
 ];
echo '<div class="col-lg-9">';
    echo '<select name="aficion[]" multiple>';
    foreach ($aficion as $indice => $valor) {
        echo '<option value="'. $indice .'">'. $valor .'</option>';
    }
    echo '</select>';
echo '</div>';
}




                                                    
                                                    
                                             
                                             
                                           
     

       
        
      
