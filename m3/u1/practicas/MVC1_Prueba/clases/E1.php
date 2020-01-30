<?php
namespace clases;

class E1 {
    
    public $numero;
    
    function __construct($numero) {
        $this->numero = $numero;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
        return $this;
    }
    
    public function dibujarCajas(){
        
    for ($i=0; $i< $this->getNumero(); $i++){
           ?>
        <div>
            <label id ="<?= $i ?>"><?= $i ?></label>
            <input type="number" id ="<?= $i ?>" name="valores[]"> <br \>
        </div>
               
        <?php
        }
        
        ?>
<button name="submitDibujar">Comprobar</button> <button name="submitRestablecer" type="reset">Restablecer</button>
        <?php
      }
   
}
