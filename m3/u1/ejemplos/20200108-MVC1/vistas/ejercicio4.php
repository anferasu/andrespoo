<form method="get" action="<?=$this->crearRuta(["accion"=>"ejercicio4",])?>">
            <div>
                <label for="inumero">Introduce un numero</label>
                <input type="text" name ="numero" id="inumero"> 
            </div>
            <button name="boton">Enviar</button>    
</form>

<?= $this->numeros ?>