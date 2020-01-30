<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <?php
        $suma = 0;
        $media = 0;
        $numeroActual = 0;
        $valoresIntroducidos = "";

        $terminar = 0;

        if (isset($_POST['send'])) {
            $numeroActual = $_REQUEST['num1'];
            $valoresIntroducidos = $_REQUEST['valor'];

            if ($numeroActual != 0) {

                $valoresIntroducidos .= "$numeroActual";

                $valoresIntroducidosArray = explode(",", $valoresIntroducidos);
                $valoresIntroducidos .= ","; // al añadirle la coma al final no cuenta el siguiente elemento
            } else {

                $valoresIntroducidosArray = explode(",", $valoresIntroducidos);
                array_pop($valoresIntroducidosArray); // elimino el ultimo elemento porque esta vacio, es por la coma
                $terminar = 1;
            }
            $suma = array_sum($valoresIntroducidosArray);
            $media = $suma / count($valoresIntroducidosArray);
        }
        ?>
    </head>
    <body>
        <h1>Ejercicio 15 Hoja 4</h1>
<?php
if (!$terminar) {
    ?>
            <div>
                <form method="post" name="frm">
                    <table border="0">
                        <div><tr><td><label>Ingrese numero</label></td><td> <input name="num1" type="number" min="0" max="1000"></td></tr></div>
                        <div><tr><td><input type="submit" name="send" value="Enviar" /></td></tr></div>
                    </table>
                    <input type="hidden" name="valor" value="<?= $valoresIntroducidos ?>">

                </form>
            </div>
    <?php
}
echo "Suma: $suma";
echo "<br>";
echo "Media: $media";
?>
    </body>
</html>
