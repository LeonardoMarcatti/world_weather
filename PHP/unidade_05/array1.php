<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">    
    <title>My Title</title>    
</head>
<body>
    <?php
    	$salada = array("Maca", "Abacaxi", "Laranja");
    	print_r($salada);
        echo "<br>";
    	echo "Quantidade de ítens: " . count($salada) . "<br>";
        echo "Primeiro ítem do array: " . $salada[0] . "<br>";
        echo "<hr>";

    	$agenda = array("Teste", 452.25, array("Água", "Fogo", 5));
        echo "Função var_dump(variável)" . "<br>";
    	var_dump($agenda);
        echo "Segundo ítem do terceiro ítem: " . $agenda[2][1];
        echo "<hr>";

        //Associative array
        $data = array("Nome" => "José", "Sobre_Nome" => "Cavalcante", "Idade" => 51, "Salario" => 5321.15);
        echo "Associative array: " . "<br>";
        print_r($data);
        echo "<br>";
        echo "Salário: R$" . number_format($data['Salario'], 2, ',', '.');
        echo "<hr>";

        //Array functions
        $my_array = array(5, 15, 2, 0, 84, 1, 7, -8, -5, -50, 105);
        $my_array2 = [15, 2, 0, 84, 1, 7, -8, -5, -50, 99];
        sort($my_array);
        sort($my_array2);
        print_r($my_array);
        echo "<br>";
        print_r($my_array2);
        echo "<br>";
        echo "Valor máximo: " . max($my_array) . "<br>" . "Valor mínimo: " . min($my_array) . "<br>";
        echo "Soma dos valores: " . array_sum($my_array) . "<br>";

        //Retorna a diferença entre arrays tomando como base a existência de chaves. Aqui, o valor de cada chave é irrelevante, importando apenas a existência da chave;
        print_r(array_diff_key($my_array, $my_array2));
        echo "<br>";

        //Retorna a diferença de arrays baseado nos valores de cada índice;
        print_r(array_diff_assoc($my_array, $my_array2));
        echo "<br>";

        //Retorna os valores únicos entre arrays;
        print_r(array_diff($my_array, $my_array2));
        echo "<br>";

        //Busca um valor no array e retorna sua chave;
        echo "Índice do valor -8: " . (array_search(-8, $my_array)) . "<br>";

        //Busca um valor no array e retorna um boleano;
        echo "Índice do valor -8: " . (in_array(-8, $my_array)) . "<br>";

    ?>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript"></script>
</body>
</html>