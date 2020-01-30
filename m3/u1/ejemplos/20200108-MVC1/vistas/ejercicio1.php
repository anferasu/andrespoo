<form method="get" action="<?=$this->crearRuta(["accion"=>"ejercicio1",]
                
                    )?>">
                <h1>Lee e imprime 3 numeros los ordena y compara si fueron introducidos en el mismo orden </h1><br>
                <div>
                <label for="a" >Ingrese Numero 1</label>
                <input id="a" name ="numero[]" type="text">
                </div>
                <div>
                <label for="b" >Ingrese Numero 2</label>
                <input id="b" name ="numero[]" type="text">
                </div>
                <div>
                <label for="c" >Ingrese Numero 3</label>
                <input id="c" name ="numero[]" type="text">
                </div>
                
                <button name="boton">Enviar</button>                    
</form>

