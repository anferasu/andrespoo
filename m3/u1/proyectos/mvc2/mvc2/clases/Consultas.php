<?php

namespace clases;

class Consultas {

    private $conection;
    private $consulta;
    public $resultado; // array asoc

    function __construct($configuraciones) {
        $this->conection = new \mysqli($configuraciones['host'], $configuraciones['user'], $configuraciones['password'], $configuraciones['baseDatos'], $configuraciones['port']);
        $this->conection->query("SET NAMES 'utf8'");
    }

    function ejecutar($consulta) {
        $this->consulta = $this->conection->query($consulta);
        if (gettype($this->consulta) === 'object') {
            $this->resultado = $this->consulta->fetch_all(MYSQLI_ASSOC);
            $this->consulta->data_seek(0);
        }
        
    }
    
    public function find(){
        if (gettype($this->consulta) === 'object') {
            return $this->consulta->fetch_object("\\modelos\\Entradas");
        }
    }
    
    public function findAll($modelo){
        $salida=[];
        
        if (gettype($this->consulta) === 'object') {
            $this->consulta->data_seek(0);
            while($salida[]=$this->consulta->fetch_object("\\modelos\\" . $modelo));
            array_pop($salida);
        }
        return $salida;
    }

    function listar($campos = "") {
        if (!empty($campos)) {
            $borrar = 1;
            for ($c = 0; $c < $this->consulta->num_rows; $c++) {
                foreach ($this->resultado[$c] as $i => $v) {
                    foreach ($campos as $d => $f) {
                        if ($i == $d) {
                            $borrar = 0;
                            break;
                        }
                    }
                    if ($borrar) {
                        unset($this->resultado[$c][$i]);
                    } else {
                        if ($f != '') {
                            $this->resultado[$c] = array_flip($this->resultado[$c]);
                            $this->resultado[$c][$v] = $f;
                            $this->resultado[$c] = array_flip($this->resultado[$c]);
                        }
                    }
                    $borrar = 1;
                }
            }
        }

        return $this->resultado;
    }

}
