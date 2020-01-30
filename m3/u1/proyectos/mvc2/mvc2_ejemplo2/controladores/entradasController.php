<?php
namespace controladores;

class entradasController extends Controller{
    
public function listarAccion($datos){
      $this->aplicacion->conexion->ejecutar("Select * from entradas");
      $datos=$this->aplicacion->conexion->resultado;
      $modelo=$this->aplicacion->conexion->findAll("Entradas");
      $this->render([
          "vista"=>"index",
          "contenidoArray"=>$datos,
          "contenidoModelo"=>$modelo,
          "pie"=>"Listado de Entradas",
          "activo"=>"Listar"
    ]);

}

public function introducirAccion($datos){
      $this->render([
          "vista"=>"formulario",
          "pie"=>"Introducir un dato",
          "activo"=>"Introducir"
    ]);
}
    
    
public function almacenarAccion($datos){
        $consulta="INSERT INTO entradas(titulo,texto) VALUES ('". $datos["Titulo"] . "','" . $datos["Texto"] . "')";
        $this->aplicacion->conexion->ejecutar($consulta);
        $this->listarAccion($datos);

    }

}

