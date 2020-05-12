<?php 
    $salario = 8562.56;
    $numero = -25;
?>

<!doctype html>
<html lang="pt-BR">
  <head>
    <title>Curso PHP FUNDAMENTAL</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body>
    <p>
        <?php
            echo "Salário: " . number_format($salario, 2, ',', '.') . "<br>";

            // Multiplicacao e Divisao
            echo "Trimestre: " . number_format($salario*3, 2, ',', '.') . "<br>";
            echo "Semanal: " . number_format($salario/4, 2, ',', '.') . "<br>";

            // Exponencial
            echo "Exponencial: 2<sup>3</sup> =  " . pow(2, 3) . "<br>";

            // Raiz Quadrada
            echo "Raiz quadrada: " . "16<sup>1/2</sup> =  " . sqrt(16) . "<br>";
            echo "Raiz qualquer: " . "16<sup>1/4</sup> =  " . pow(16, 1/4) . "<br>";

            // Randômico Generica
            echo "Aleatório: " . number_format(rand(), 0, ',', '.') . "<br>";

            // Randômico entre um intervalo
            echo "Aleatório em intervalo de 1 a 100: " . rand(1, 100) . "<br>";

            // Valor absoluto
            echo "Número: $numero" . "<br>";
            echo "Número absoluto: " . abs($numero) . "<br>";

            //Arredondamentos
            echo "Arredondar para cima: " . number_format(ceil($salario), 2, ',', '.') . "<br>";
            echo "Arredondar para baixo: " . number_format(floor($salario), 2, ',', '.') . "<br>";
            echo number_format(round($salario), 2, ',', '.') . "<br>";

            //Retorna o resto de uma divisão.
            echo "Retorna o resto de uma divisão: 5/3 = " . fmod(5,3) . "<br>";

            //Retorna a parte inteira de uma divisão
            echo "Retorna a parte inteira de uma divisão: 5/3 = " . intdiv(5,3) . "<br>";
                
        ?>
    </p>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>