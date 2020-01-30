<?php

use yii\helpers\Html;
?>
<div>
<?=    
html::a("Listar Peliculas",['peliculas/index'],['class' => 'btn btn-lg btn-success']);
?>
</div>    
    <br />
<div>
<?=        
html::a("Crear Peliculas",['peliculas/create'],['class' => 'btn btn-lg btn-success']);
?>
</div>