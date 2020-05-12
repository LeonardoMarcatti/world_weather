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
    	$my_array = array(5, 15, 2, 0, 84, 1, 7, -8, -5, -50, 105);
        $valor = 5;

        if (in_array($valor, $my_array)) {
        	echo "O valor $valor está no array." . " " . "Seu índice é: " . array_search($valor, $my_array) . "<br>";
        }else{
        	echo "O valor $valor não está no array" . "<br>";
        }

        echo (in_array($valor, $my_array)) ? "Verdade" : "Mentira";
        echo "<br>";

        $a = 5;
        $b = 5;

        if ($a > $b) {
        	echo "$a é maior que $b." . "<br>";
        } elseif ($a < $b){
        	echo "$a é menor que $b." . "<br>";
        } else {
        	echo "$a é igual a $b." . "<br>";
        }

        $dia = 5;

        switch ($dia) {
        	case '1':
        		echo "Hoje é Domingo!" . "<br>";
        		break;
        	case '2':
        		echo "Hoje é Segunda!" . "<br>";
        		break;
        	case '3':
        		echo "Hoje é Terça!" . "<br>";
        		break;
        	case '4':
        		echo "Hoje é Querta!" . "<br>";
        		break;
        	case '5':
        		echo "Hoje é Quinta!" . "<br>";
        		break;
        	case '6':
        		echo "Hoje é Sexta!" . "<br>";
        		break;
        	case '7':
        		echo "Hoje é Sábado!" . "<br>";
        		break;
        	default:
        		echo "Hoje não é seu dia!" . "<br>";
        		break;
        }
        
    ?>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript">
        
    </script>
</body>
</html>