<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>        
        <!-- estilo -->
        <link href="_css/estilo.css" rel="stylesheet">
        <link href="_css/produtos.css" rel="stylesheet">
        <link href="_css/produto_pesquisa.css" rel="stylesheet">
    </head>
    <body>
        <?php include_once("_incluir/topo.php");?>
        <main>
            <div id="janela_pesquisa">
                <form action="inicial.php" method="get">
                    <input type="text" name="produto" placeholder="pesquise" id="pesquise">
                    <input type="image" src="assets/botao_search.png" alt="">
                </form>
            </div>
           <div id="listagem_produtos">
            <?php
                // Determinar localidade BR
                setlocale(LC_ALL, 'pt_BR.utf-8');

                require_once("../conection.php");

                // Consulta ao banco de dados
                $produtos = "SELECT produtoID, nomeproduto, tempoentrega, precounitario, imagempequena FROM produtos";
                if (isset($_GET['produto'])) {
                    $produtos .= " where nomeproduto like '%$_GET[produto]%'";
                }
                $resultado = mysqli_query($conection, $produtos);
                if(!$resultado) {
                    die("Falha na consulta ao banco");
                }    

                while($linha = mysqli_fetch_assoc($resultado)){
                    echo 
                "<ul>
                    <li class=\"imagem\">
                        <a href=\"detalhe.php?cod=$linha[produtoID]\">
                            <img src=\"$linha[imagempequena]\">
                        </a>
                    </li>
                    <li><h3>$linha[nomeproduto]</h3></li>
                    <li>Tempo de Entrega : $linha[tempoentrega]</li>
                    <li>Preço unitário:" . money_format('%.2n',$linha['precounitario']) . "</li>
                </ul>";
                }
            ?>
            </div>
        </main>
        <?php include_once("_incluir/rodape.php"); ?>
    </body>
</html>
<?php
    // Fechar conexao
    mysqli_close($conection);
?>