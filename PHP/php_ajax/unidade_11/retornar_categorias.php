<?php 
    $callback = isset($_GET['callback']) ?  $_GET['callback'] : false;
    $conecta = mysqli_connect("localhost","root","","andes");

    $selecao = "SELECT categoriaID, nomecategoria FROM categorias";
    $categorias = mysqli_query($conecta, $selecao);

    $retorno = array();
    while($linha =  mysqli_fetch_assoc($categorias)) {
        $retorno[] = $linha;
    } 	

    echo ($callback ? $callback . '(' : '') . json_encode($retorno) . ($callback? ')' : '');
    
    // fechar conecta
    mysqli_close($conecta);
?>