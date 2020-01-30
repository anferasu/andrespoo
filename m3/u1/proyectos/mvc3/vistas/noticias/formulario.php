<form method="get" action="<?= $this->crearRuta(["accion"=>"save","controlador"=>"noticias"]) ?>">
  <div class="form-group">
    <label for="id">Id</label>
    <input type="text" class="form-control" id="id" readonly="true" name="Id" value="<?= $this->datos["Id"] ?>">
  </div>
  <div class="form-group">
    <label for="titulo">Titulo de la noticia</label>
    <input type="text" class="form-control" id="titulo" placeholder="Introduce titulo" name="Titulo" value="<?= $this->datos["Titulo"]?>">
  </div>
    <div class="form-group">
    <label for="texto">Texto de la noticia</label>
    <input type="text" class="form-control" id="texto" placeholder="Introduce texto" name="TextoCorto" value="<?= $this->datos["TextoCorto"]?>">
  </div>
  <div class="form-group">
  <button class="btn btn-info pull-right">Actualizar</button>
  </div>
</form>

