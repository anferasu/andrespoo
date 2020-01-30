<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace modelos;

/**
 * Description of Modelo
 *
 * @author ramon
 */
class Modelo {
    private $conection;

  public function conexion(){
       $opciones= require('config/principal.php');
       $configuraciones=$opciones['baseDatos'][0];
       $this->conection = new \mysqli($configuraciones['host'], $configuraciones['user'], $configuraciones['password'], $configuraciones['baseDatos'], $configuraciones['port']);
       $this->conection->query("SET NAMES 'utf8'");
  }
  
  public function __toString() {
        $salida="<ul>";
        foreach($this as $campo=>$valor){
            $salida.="<li>$campo: $valor</li>";
        }
        $salida.="</ul>";
        return $salida;
  }
  
    public function insert(){
        $tabla=substr(get_class($this), strrpos(get_class($this),"\\")+1);
        $valores="(";
        $campos=$this->campos();
        foreach(explode(",",$campos) as $campo){
                $valores.="'" . $this->$campo . "',";
            }
        
        $valores[strlen($valores)-1]=")";
        $consulta="INSERT INTO $tabla ($campos) VALUES $valores;";
        $this->conexion();
        $this->conection->query($consulta);
    }
    
    public function todos(){
        $tabla=substr(get_class($this), strrpos(get_class($this),"\\")+1);
        $consulta="SELECT * FROM $tabla";
        $this->conexion();
        return $this->conection->query($consulta)->fetch_all();
    }
    
    public function listado($v){
        $valores= array_replace([
            "campos"=>"*",
            "condicion"=>"1"
        ], $a);
        $tabla=substr(get_class($this), strrpos(get_class($this),"\\")+1);
        $consulta="SELECT ". $valores['$campos'] . " FROM $tabla WHERE " . $valores["condicion"] ;
        $this->conexion();
        $this->conection->query($consulta);
    }
    
     public static function findAll($condiciones=1){
        $salida=[];
        $opciones= require('config/principal.php');
        $configuraciones=$opciones['baseDatos'][0];
        $conexion = new \mysqli($configuraciones['host'], $configuraciones['user'], $configuraciones['password'], $configuraciones['baseDatos'], $configuraciones['port']);
        $conexion->query("SET NAMES 'utf8'");
        
        $conexion->query("SET NAMES 'utf8'");
        $tabla=substr(get_called_class(), strrpos(get_called_class(),"\\")+1);
        $modeloHijo=get_called_class();
        $consulta="Select * from $tabla where $condiciones";
        $resultado=$conexion->query($consulta);
        
        for($c=0;$c<$resultado->num_rows;$c++){
            $salida[]=$resultado->fetch_object($modeloHijo);
        }
        return $salida;
    }
    
    public static function findOne($condiciones=1){
        $opciones= require('config/principal.php');
        $configuraciones=$opciones['baseDatos'][0];
        $conexion = new \mysqli($configuraciones['host'], $configuraciones['user'], $configuraciones['password'], $configuraciones['baseDatos'], $configuraciones['port']);
        $conexion->query("SET NAMES 'utf8'");
        
        $conexion->query("SET NAMES 'utf8'");
        $tabla=substr(get_called_class(), strrpos(get_called_class(),"\\")+1);
        $modeloHijo=get_called_class();
        $consulta="Select * from $tabla where $condiciones";
        $resultado=$conexion->query($consulta)->fetch_object($modeloHijo);
        return $resultado;
    }
}
