<?php 
    $_nome = "José";
    $sobre_nome = "Silva";
    $string = "AaBbAaBb";
    $string2 = "Curso de PHP Fundamental";
?>

<!doctype html>
<html lang="pt-BR">
  <head>
    <title>Curso PHP Fundamental</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body>
    <p>
        <?php
            echo $_nome . ' ' . $sobre_nome . "<br>";
            
            //strlen - Retorna a quantidade de letras numa string. 
            echo "A palavra $string2 possui " . strlen($string2) . " letras." . "<br>";

            //stripos - Retorna a primeira ocorrência não case-sensitive.
            echo stripos($string, "b") . "<br>";

            //strpos - Retorna a primeira ocorrência case-sensitive.
            echo strpos($string, "b") . "<br>";

            //stripos - Retorna a última ocorrência não case-sensitive.
            echo strripos($string, "B") . "<br>";

            //strpos - Retorna a última ocorrência case-sensitive.
            echo strrpos($string, "B") . "<br>";

            //rtrim - Retorna uma string sem um conjunto de caracteres escolhidos;
            echo "Original: " . $string . "<br>" . "Modificada: " . rtrim($string, "aBb") . "<br>";

            //str_word_count - Retorna a quantidade de palavras em uma string;
            echo str_word_count($string2, 0) . "<br>";

            //strupper - Retorna caixa alta de uma string;
            echo strtoupper($string2) . "<br>";

            //strupper - Retorna caixa baixa de uma string;
            echo strtolower($string2) . "<br>";

            //strstr - Retorna parte final de uma string a partir do caractere desejado.
            echo strstr($string2, "P"). "<br>";

            //substr_count - Retorna a quantidade de substrings/caracteres em uma string.
            echo substr_count($string2, "P") . "<br>";

            //str_replace - Retorna uma string com caracteres substituidos.
            echo str_replace(" ", "-", $string2) . "<br>";

            //substr - Retorna parte de uma string de um ponto a outro.
            echo substr($string2, 6, 6) . "<br>";
            echo substr($string2, 6, -5) . "<br>";

            //Substitui parte de uma string por outra
            echo substr_replace($string2, "De Algo", 6) . "<br>";

            //str_split - Divide a string em caracteres e os coloca em um array.
            print_r(str_split($string2, 2)) . "<br>";
        ?>
    </p>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>