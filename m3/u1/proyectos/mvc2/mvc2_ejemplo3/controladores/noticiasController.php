<?php
namespace controladores;

class noticiasController extends Controller{
    
public function listarAccion($datos){
      //$this->aplicacion->conexion->ejecutar("Select * from noticias");
      //$datos=$this->aplicacion->conexion->resultado;
      //$modelo=$this->aplicacion->conexion->findAll("Entradas");
    $modelo1=new \modelos\Noticias();
    $datos=$modelo1->todos();
    $modelo=\modelos\Noticias::findAll();
      $this->render([
          "vista"=>"noticias/index",
          "contenidoArray"=>$datos,
          "contenidoModelo"=>$modelo,
          "pie"=>"Listado de Entradas",
          "activo"=>"Noticias"
    ]);

}

public function introducirAccion($datos){
      $this->render([
          "vista"=>"noticias/formulario",
          "pie"=>"Introducir un dato",
          "activo"=>"Introducir Noticias"
    ]);
}
    
    
public function almacenarAccion($datos){
        //$consulta="INSERT INTO noticias(titulo,texto) VALUES ('". $datos["Titulo"] . "','" . $datos["Texto"] . "')";
        $modelo=new \modelos\Noticias();
        $modelo->titulo=$datos["Titulo"];
        $modelo->texto=$datos["Texto"];
        $modelo->insert();
        //$this->aplicacion->conexion->ejecutar($consulta);
        $this->listarAccion($datos);
    }

}

