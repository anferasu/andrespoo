<h1>EJERCICIO NUMERO 1 DEL EXAMEN DE PHP</h1><BR />
<LABEL>Escriba un numero (0< numero <= 10) y dibujaré una tabla de una columna de ese tamaño con cajas de texto en cada celda</LABEL>
<form action="<?= $this->crearRuta([
    "controlador"=>"site",
    "accion"=>'paso1',
]) ?>">
     <fieldset>
     <legend>Ejercicio1</legend> 
     <label for="a" >Tamaño de la tabla</label>
    <input type="number" id="a" placeholder="Introduce un numero" name="caja" min="0" max="10" required>
    <button name="submitDibujar">Dibujar</button> <button name="submitRestablecer" type="reset">Restablecer</button>
    </fieldset>
</form>
<br \>

