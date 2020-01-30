<?php
//var_dump($this->resultado);
use clases\E1;
?>
<h1>EJERCICIO NUMERO 1 DEL EXAMEN DE PHP</h1><BR />
<form action="<?= $this->crearRuta([
    "controlador"=>"site",
    "accion"=>'paso2',
])?>" > 
    <div><label>Ejercicio 1-Paso2</label> </div>
    <div><?php echo $this->resultado->dibujarCajas()?></div> <br \> 
    
</form>

