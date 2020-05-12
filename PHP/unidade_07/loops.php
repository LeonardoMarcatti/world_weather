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
    	$i = 0;
    	$numeros = [];
    	$sorteio;
    	echo "Números da Mega-Senna: " . " ";
    	while ($i <= 5) {
    		$sorteio = rand(1, 60);
    		if (!in_array($sorteio, $numeros)) {
    			$numeros[$i] = $sorteio;
    			$i++;
    		}
    	}
    	sort($numeros);
    	$i = 0;
    	while ($i <= count($numeros)) {
    		if ($i < 5) {
    			echo $numeros[$i] . " - ";
    			$i++;
    		} else {
	    		echo $numeros[$i];
	    		$i++;
    		}
    	}
    	echo "<br>" . "<br>";
    	$i = 0;
    	
    	do{
    		echo "Valor: $i" . "<br>";
    		$i++;
    	} while ($i <= 10);

    	echo "<br>" . "<br>";

    	for ($i=0; $i < count($numeros); $i++) {
    		if ($i == 3) {
    			break;
    		}
    		else{
    			echo $i . " ";
    		};
    	};
    	echo "<br>";

        for ($i=0; $i < count($numeros); $i++) {
            if ($i == 3) {
                continue;
            }
            else{
                echo $i . " ";
            };
        };
        echo "<br>";

    	$salada = ["Abacate", "Banana", "Coco", "Damasco", "Framboesa"];
    	foreach ($salada as $fruta) {
    		echo $fruta . " ";
    	};
    	echo "<br>";

    	$salada2 = ["fruta" => "Goiaba", "size" => "small", "tax" => 500];
    	foreach ($salada2 as $key => $value) {
    		echo "$key = $value" . "<br>";
    	}

    ?>
    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript">
        
    </script>
</body>
</html>