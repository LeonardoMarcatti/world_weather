<?php
    $salario = 800;
    $gasolina = 2.79;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            // testar se é numérica
            echo "$salario é numérico?" . " " . is_numeric($salario) . "<br>";
            echo "$gasolina é numérico?" . " " . is_numeric($gasolina) . "<br>";

            // testar se é inteiro
            echo "$salario é inteiro?" . " " . is_int($salario) . "<br>";
            echo "$gasolina é inteiro?" . " " . is_int($gasolina) . "<br>";

            // testar se é float
            echo "$salario é float?" . " " . is_float($salario) . "<br>";
            echo "$gasolina é float?" . " " . is_float($gasolina) . "<br>";
        ?>
    </body>
</html>