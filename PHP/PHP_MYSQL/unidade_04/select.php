<?php
    include_once('../conection.php');
    $sql = 'select nomeproduto, tempoentrega, precounitario, imagempequena, estoque from produtos';
    $result = mysqli_query($conection, $sql);
    if ($result) {        
            while ($linha = mysqli_fetch_assoc($result)) {
                echo "<ul><li class=\"imagem\"><img src=\"$linha[imagempequena]\"></li>
                <li><h6>$linha[nomeproduto]</h6></li>
                <li>Entrega: $linha[tempoentrega] dias</li>
                <li>Preço:"; echo money_format('%.2n', "$linha[precounitario]"); echo"</li>
                <li>Estoque: $linha[estoque]</li></ul>";
            }
        echo "</ul>";
    }

    mysqli_free_result($result);
?>