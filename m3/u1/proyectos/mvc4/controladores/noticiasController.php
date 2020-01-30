<?php
namespace controladores;
use modelos\Noticias;
use clases\Collapse;
use clases\Panels;
use clases\ElementoPanels;

class noticiasController extends Controller{
    
public function listarDesplegableAccion($datos){

    $modelo=new Noticias();
    $datos=$modelo->todos();
    $widget=new Collapse();
    
    foreach ($datos as $indice => $registro) {
        $s=     '<div class="noticias row"><div class="col-sm-8">' .$registro["Texto"] .  
                '</div><div class="col-sm-2"><a href="' . $this->crearRuta(["controlador"=>"noticias","accion" => "editar", "parametros" => "id=" . $registro['id']]) .
                '"><img src=" ' . $this->urlBase . '/imgs/editar.png"></a></div>' . 
                '<div class="col-sm-2"><a href="' . $this->crearRuta(["controlador"=>"noticias","accion" => "eliminar", "parametros" => "id=" . $registro['id']]) . 
                '"><img src=" ' . $this->urlBase . '/imgs/eliminar.png"></a></div></div>';
        $elemento=[
            "Titulo"=>$registro["Titulo"],
            "Contenido"=>$s
        ];
        $widget->añadirElemento($elemento);
    }
    $boton='<a href="' . $this->crearRuta(["accion"=>"listarFichas","controlador"=>"noticias"]) . '" class="btn btn-danger">Cambiar Vista</a>';
      $this->render([
          "vista"=>"noticias/index",
          "datos"=>$widget->render(),
          "activo"=>"Noticias",
          "boton"=>$boton
    ]);

}

public function listarFichasAccion($datos){

    $modelo=new Noticias();
    $datos=$modelo->todos();
    $widget=new Panels();
    
    foreach ($datos as $indice => $registro) {
        $s=     '<div class="noticias row"><div class="col-sm-8">' .$registro["Texto"] .  
                '</div><div class="col-sm-2"><a href="' . $this->crearRuta(["controlador"=>"noticias","accion" => "editar", "parametros" => "id=" . $registro['id']]) .
                '"><img class="img-responsive" src=" ' . $this->urlBase . '/imgs/editar.png"></a></div>' . 
                '<div class="col-sm-2"><a href="' . $this->crearRuta(["controlador"=>"noticias","accion" => "eliminar", "parametros" => "id=" . $registro['id']]) . 
                '"><img class="img-responsive" src=" ' . $this->urlBase . '/imgs/eliminar.png"></a></div></div>';
        $elemento=new ElementoPanels([
            "Titulo"=>$registro["Titulo"],
            "Contenido"=>$s
        ]);
        $widget->añadirElemento($elemento);
        $widget->setColumnas(3);
    }
    $boton='<a href="' . $this->crearRuta(["accion"=>"listarDesplegable","controlador"=>"noticias"]) . '" class="btn btn-info">Cambiar Vista</a>';
      $this->render([
          "vista"=>"noticias/index",
          "datos"=>$widget->render(),
          "activo"=>"Noticias",
          "boton"=>$boton
    ]);

}

public function editarAccion($datos){
      $modelo=new \modelos\Noticias();
      $datos=$modelo->listado1(["condicion"=>"id=" . $datos["id"]]);
      $this->render([
          "vista"=>"noticias/formulario",
          "datos"=>$datos,
          "pie"=>"Modificar un dato",
          "activo"=>"Introducir Entrada"
    ]);
}
    

    public function insertarAccion($datos){
        $modelo=new \modelos\Noticias();
        $modelo->titulo=$datos["Titulo"];
        $modelo->texto=$datos["Texto"];
        $modelo->insert();
        $this->listarAccion($datos);
    }
    
    public function modificarAccion($datos){
        $modelo=new \modelos\Noticias();
        $modelo->id=$datos["Id"];
        $modelo->titulo=$datos["Titulo"];
        $modelo->texto=$datos["Texto"];
        $modelo->save();
        $this->listarAccion($datos);

    }
    
     public function eliminarAccion($datos){
        $modelo=new \modelos\Noticias();
        $modelo->id=$datos["id"];
        $modelo->eliminar();
        $this->listarAccion($datos);

    }

}

