<div class="row alert alert-info">
    <form name="unico" method="get" action="<?= $this->crearRuta(["controlador" => "noticias", "accion" => "insertar"]) ?>">
        <div class="form-group">
            <label for="titulo">Titulo de la noticia</label>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-spinner fa-spin fa-fw"></i></i></span>
                <input type="text" class="form-control" id="titulo" name="Titulo" placeholder="Introduce el titulo de la noticia">
            </div>
        </div>
        <div class="form-group">
            <label for="texto">Texto de la noticia</label>
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-3x fa-list-alt" aria-hidden="true"></i></span>

                <textarea rows="10" class="form-control" id="texto" placeholder="Introduce el texto de la noticia" name="Texto"></textarea>
            </div>
        </div>
        <div class="form-group">
            <button class="btn btn-primary pull-right btn-md">Añadir la Noticia</button>
        </div>
    </form>
</div>
<div class="row">
    <div class="page-header">
        <h1>Listado de Noticias </h1><?= $this->boton?>
    </div>
 </div>


<div class="row alert alert-info">
    <?= $this->datos ?>
</div>


<div class="row">
    <nav class="navbar navbar-fixed-bottom navbar-inverse">
        <p class="navbar-text">Estamos probando</p>
    </nav>
</div>


