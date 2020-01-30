<?php

use \clases\Aplicacion;
?>

<div class="row well well-alto">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="alert alert-info"><?= $this->datos["Titulo"] ?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8">
            <?= $this->datos["Texto"] ?>
        </div>

        <div class="fotoPortada col-lg-4">
            <?= Aplicacion::colocarFoto(["nombre" => "entrada1.png"]) ?>
        </div>
    </div>
</div>
<div class="row">
    <?=
        (new \clases\Modal([
           "titulo"=>'<i class="fa fa-bell" aria-hidden="true"></i> Realizado por el curso de Desarrollo de Aplicaciones',
           "datos"=>[
               "Estamos realizando unas pruebas de la nueva aplicación"
           ] 
        ]))->render(FALSE);
    ?>
</div>

<div class="row">
    <nav class="navbar navbar-fixed-bottom navbar-inverse">
        <p class="navbar-text">Estamos probando</p>
    </nav>
</div>




