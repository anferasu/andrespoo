<?php

namespace controladores;

class noticiasController extends Controller {

    public function indexAccion($datos) {

        $modelo = new \modelos\Noticias();
        $datos = $modelo->todos();
        $this->render([
            "vista" => "noticias/index",
            "contenido" => $datos,
            "pie" => "Listado de Noticias",
            "activo" => "Listar Noticias"
        ]);
    }
    
    public function editarAccion($datos){
      $modelo=new \modelos\Noticias();
      $datos=$modelo->listado1(["condicion"=>"Id=" . $datos["Id"]]);
      $this->render([
          "vista"=>"noticias/formulario",
          "datos"=>$datos,
          "pie"=>"Modificar una noticia"
    ]);
}

    public function saveAccion($datos){
        $modelo=new \modelos\Noticias();
        $modelo->Id=$datos["Id"];
        $modelo->Titulo=$datos["Titulo"];
        $modelo->TextoCorto=$datos["TextoCorto"];
        $modelo->save();
        $this->indexAccion(null);

    }
    
    public function eliminarAccion($datos){
        $modelo=new \modelos\Noticias();
        $modelo->Id=$datos["Id"];
        $modelo->eliminar();
        $this->indexAccion(null);

    }

}
