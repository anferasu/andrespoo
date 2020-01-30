<?php

namespace clases;
class E3 {
    public $numeros;
    public $moda;
    public $mediana;
    public $desviacionEstandar;
            
    function __construct($numeros) {
        $this->numeros = $numeros;
        $this->setModa();
        $this->setMediana();
        $this->setDesviacionEstandar();
    }
    
    public function getResultados(){
        return "<ul><li>La media es " . $this->getMedia() . "</li>" .
                "<li>La mediana es " . $this->getMediana() . "</li> " .
                "<li>La moda es " . $this->getModa() . "</li>" . 
                "<li>La desviacion estandar es " . $this->getDesviacionEstandar() . "</li></ul>";
            
    }
    
    public function getMediana() {
        return $this->mediana;
    }

        public function getMedia(){
        return array_sum($this->numeros)/count($this->numeros);
    }
    
    public function getModa(){
        return join(",", $this->moda);
    }
    
    public function getNumeros() {
        return $this->numeros;
    }

    public function setNumeros($numeros) {
        $this->numeros = $numeros;
    }
    
    public function setModa() {
         $salida= array_count_values($this->getNumeros());
        $maximo=max($salida);
        $this->moda=[];
         foreach ($salida as $numeros=>$repeticiones) {
            if($repeticiones==$maximo){
                $this->moda[]=$numeros;
            }
        }
    }

    public function setMediana() {
        sort($this->numeros,SORT_NUMERIC);
        $count = count($this->getNumeros());
        $middleval = floor(($count-1)/2);
        
        if($count % 2) {
            $median = $this->numeros[$middleval];
        } else {
            $low = $this->numeros[$middleval];
            $high = $this->numeros[$middleval+1];
            $median = (($low+$high)/2);
        }
        $this->mediana=$median;
        //var_dump($median);
    }
    public function getDesviacionEstandar() {
        return $this->desviacionEstandar;
    }

    public function setDesviacionEstandar() {
        
      $sum2=0;
      for($i=0;$i<count($this->getNumeros());$i++){
	   $sum2+=($this->numeros[$i]-$this->getMedia())*($this->numeros[$i]-$this->getMedia());
      }
      $vari = $sum2/count($this->getNumeros());
      $sq = sqrt($vari);
      $this->desviacionEstandar = $sq;
    }


}
