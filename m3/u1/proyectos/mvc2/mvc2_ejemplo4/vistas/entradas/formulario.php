<form name="unico" method="get" action="<?= $this->crearRuta(["accion"=>"modificar"]) ?>">
    <div><input readonly="true" type="text" name="Id" id="iId" value="<?= $this->datos["id"]?>"><label for="iId">Titulo</label></div>
<div><input type="text" name="Titulo" id="iTitulo" value="<?= $this->datos["titulo"]?>"><label for="iTitulo">Titulo</label></div>
<div><input type="text" name="Texto" id="iTexto" value="<?= $this->datos["texto"]?>"><label for="iTexto">Texto</label></div>
<div><button>Insertar</button></div>
</form>


