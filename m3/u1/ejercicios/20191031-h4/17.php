<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <fieldset>
            <legend> Cantidad Numeros </legend>
            <form method="post" action="17.php">
                <input type="number" name="cantNumeros">
                <input type="submit" name="" value="generar">
            </form>
        </fieldset>
        <form method="post">

            <?php if (isset($_POST['cantNumeros'])) { ?>
                <?php for ($i = 1; $i <= $_POST['cantNumeros']; $i++) { ?>
                    <table border="0">
                        <div><tr><td><label>Numero <?= $i ?></label> <input type="number" name="numero[]" min="1" max="50"></td></tr></div><br>
                    </table>
                <?php } ?>
            <?php } ?>
            <input type="submit" value="Enviar" name="send">
        </form>
        <?php
        if (isset($_REQUEST['send'])) {
            $numeros = [];
            $numeros = $_REQUEST['numero'];
            $contador=0; 
            $x=0;
            while ($contador < count($numeros)) {
                $x=$contador+1;
                echo "<div>" . "numero". " ". $x ."=". $numeros[$contador] . "</div>";
                $contador++;
            }
            echo "<br>" . 'la suma es: ' . array_sum($numeros);
            echo "<br>" . 'la media es: ' . array_sum($numeros) / count($numeros);
        }
        ?>
    </body>
</html>
