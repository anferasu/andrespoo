<?php
namespace controladores;

class entradasController extends Controller{
    
public function listarAccion($datos){
      //$this->aplicacion->conexion->ejecutar("Select * from entradas");
      //$datos=$this->aplicacion->conexion->resultado;
      //$modelo=$this->aplicacion->conexion->findAll("Entradas");
    $modelo1=new \modelos\Entradas();
    $datos=$modelo1->todos();
    $modelo=\modelos\Entradas::findAll();
      $this->render([
          "vista"=>"entradas/index",
          "contenidoArray"=>$datos,
          "contenidoModelo"=>$modelo,
          "pie"=>"Listado de Entradas",
          "activo"=>"Entradas"
    ]);

}

public function introducirAccion($datos){
      $this->render([
          "vista"=>"entradas/formulario",
          "pie"=>"Introducir un dato",
          "activo"=>"Introducir Entrada"
    ]);
}
    
    
public function almacenarAccion($datos){
        //$consulta="INSERT INTO entradas(titulo,texto) VALUES ('". $datos["Titulo"] . "','" . $datos["Texto"] . "')";
        $modelo=new \modelos\Entradas();
        $modelo->titulo=$datos["Titulo"];
        $modelo->texto=$datos["Texto"];
        //$modelo->conexion();
        $modelo->insert();
        //$this->aplicacion->conexion->ejecutar($consulta);
        $this->listarAccion($datos);

    }

}

