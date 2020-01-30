<div class="row alert alert-info">
    <form name="unico" method="get" action="<?= $this->crearRuta(["controlador" => "noticias", "accion" => "modificar"]) ?>">
        <div class="form-group">
            <label for="titulo">Id de la noticia</label>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
                <input type="text" readonly="true" class="form-control" id="iId" name="Id" value="<?= $this->datos["id"]?>">
            </div>
        </div>
        <div class="form-group">
            <label for="titulo">Titulo de la noticia</label>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-spinner fa-spin fa-fw"></i></i></span>
                <input type="text" class="form-control" id="titulo" name="Titulo" value="<?= $this->datos["Titulo"]?>" placeholder="Introduce el titulo de la noticia">
            </div>
        </div>
        <div class="form-group">
            <label for="texto">Texto de la noticia</label>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-3x fa-list-alt" aria-hidden="true"></i></span>

                <textarea rows="10" class="form-control" id="texto" placeholder="Introduce el texto de la noticia" name="Texto"><?= $this->datos["Texto"]?></textarea>
            </div>
        </div>
        <div class="form-group">
            <button class="btn btn-primary pull-right btn-md">Actualizar la Noticia</button>
        </div>
    </form>
</div>


