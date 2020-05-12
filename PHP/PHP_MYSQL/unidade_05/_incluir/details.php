<?php
    setlocale(LC_ALL, "pt_BR.utf-8");
    require_once('../conection.php');
    $cod = $_GET['cod'];
    
    if (isset($cod)) {
        $query = "select * from produtos where produtoID = $cod";
        $result = mysqli_query($conection, $query);
        $details = mysqli_fetch_assoc($result);
        echo "<div id=detalhe_produto>
                <img class=\"imagem\"src=$details[imagemgrande] alt=\"\">
                <ul>
                    <li><h3>$details[nomeproduto]</h3></li>
                    <li>Descrição: $details[descricao]</li>
                    <li>Entrega: $details[tempoentrega] dias</li>
                    <li>Preço: "; echo money_format('%2n', "$details[precounitario]") . "</li>            
                </ul>
        </div>";
    } else {
        header('location: inicial.php');
    }
    
?>