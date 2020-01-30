<div class="row alert alert-info">
    <form name="unico" enctype="multipart/form-data" method="post" action="<?= $this->crearRuta(["controlador" => "usuarios", "accion" => "eliminarTodos"]) ?>">
    <div class="row form-group">
            <button class="btn btn-primary pull-right btn-md">Eliminar todos los usuarios</button>
    </div>

<div class="row form-group">
    <?= $this->datos ?>
</div>
    <div class="row form-group">
            <button class="btn btn-primary pull-right btn-md">Eliminar todos los usuarios</button>
    </div>
    </form>
</div>

<?= $this->pie ?>