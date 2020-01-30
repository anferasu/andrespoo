<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $suma = 0;
        $sumaCeros = "";
        $total = 0;

        if (isset($_POST['send'])) {
            $suma = $_REQUEST['num1'];
            $sumaCeros = $_REQUEST['valor'];
            $sumaCeros .= "$suma,";
        }
        ?>





        <h1>Ejercicio 16 Hoja 4</h1>
        <div>
            <form method="post" name="frm">
                <table border="0">
                    <div><tr><td><label>Ingrese numero</label></td><td> <input name="num1" type="number"></td></tr></div>
                    <div><tr><td><input type="submit" name="send" value="Enviar" /></td></tr></div>
                </table>
                <input type="hidden" name="valor" value="<?= $sumaCeros ?>">

            </form>
        </div>
        <div>------------------------------------------------------------------------</div>

        <?php
        $sumaCeros = explode(",", $sumaCeros);
        array_pop($sumaCeros);
        print_r(array_values($sumaCeros));

        foreach ($sumaCeros as $key => $value) {

            if ($sumaCeros[$key] == 0) {
                $total += 1;
            }
            
        }
        echo "<br>" . 'la suma de ceros es: ' . $total;
        ?>

    </body>
</html>
