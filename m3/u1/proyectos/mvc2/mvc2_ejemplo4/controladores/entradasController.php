<?php
namespace controladores;

class entradasController extends Controller{
    
public function listarAccion($datos){

    $modelo1=new \modelos\Entradas();
    $datos=$modelo1->todos();
      $this->render([
          "vista"=>"entradas/index",
          "contenidoArray"=>$datos,
          "pie"=>"Listado de Entradas",
          "activo"=>"Listar"
    ]);

}

public function editarAccion($datos){
      $modelo=new \modelos\Entradas();
      $datos=$modelo->listado1(["condicion"=>"id=" . $datos["id"]]);
      $this->render([
          "vista"=>"entradas/formulario",
          "datos"=>$datos,
          "pie"=>"Modificar un dato",
          "activo"=>"Introducir Entrada"
    ]);
}
    
    
    public function modificarAccion($datos){
        $modelo=new \modelos\Entradas();
        $modelo->titulo=$datos["Titulo"];
        $modelo->texto=$datos["Texto"];
        $modelo->save("id=" . $datos['Id']);
        $this->listarAccion($datos);

    }
    
     public function eliminarAccion($datos){
        $modelo=new \modelos\Entradas();
        $modelo->id=$datos["id"];
        $modelo->eliminar();
        $this->listarAccion($datos);

    }

}

