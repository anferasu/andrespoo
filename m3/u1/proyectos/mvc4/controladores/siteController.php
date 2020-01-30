<?php
namespace controladores;

class siteController extends Controller{
    
public function indexAccion($datos){

    $modelo=new \modelos\Entradas();
    $datos=$modelo->listado1([
        "condicion"=>"portada=1"
    ]);
        
    $this->render([
          "vista"=>"site/portada",
          "datos"=>$datos,
          "activo"=>"Inicio"
    ]);

}

}

