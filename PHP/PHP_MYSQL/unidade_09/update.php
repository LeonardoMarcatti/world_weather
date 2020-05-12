<?php 
    require_once("../conection.php"); 
    
    if (isset($_POST['trans'])) {
        $nometransportadora = $_POST['trans'];
        $endereco = $_POST['endereco'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estados'];
        $cep = $_POST['cep'];
        $tel = $_POST['telefone'];
        $cnpj = $_POST['cnpj'];
        $tr_id = $_POST['id'];
        
        $sql_update = "update transportadoras set nometransportadora = '$nometransportadora', endereco = '$endereco', cidade = '$cidade', estadoID = $estado, cep = '$cep', telefone = '$tel', cnpj = '$cnpj' where transportadoraId = $tr_id";
        $alteracao = mysqli_query($conection, $sql_update);
        if (!$alteracao) {
            die('Erro de alteração');
        } else{
            header('location: listagem.php');
        };
    };


    $tr = "select * from transportadoras ";
    if (isset($_GET['codigo'])) {
        $id_transp = $_GET['codigo'];
        $tr .= "where transportadoraID = $id_transp ";
    };
    $con_transp = mysqli_query($conection, $tr);
    if (!$con_transp) {
        die("Erro de consulta!");
    };
    
    $info_transportadora = mysqli_fetch_assoc($con_transp);

    $estados = "select * from estados";
    $lista_estados = mysqli_query($conection, $estados);
    if (!$lista_estados) {
        die("Erro");
    };
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP INTEGRACAO</title>
        
        <!-- estilo -->
        <link href="_css/estilo.css" rel="stylesheet">
        <link href="_css/alteracao.css" rel="stylesheet">

    </head>

    <body>
        <?php 
            include_once("_incluir/topo.php");
            echo 
            "<main>  
                <div id=\"janela_formulario\">
                    <form action=\"update.php\" method=\"post\">
                        <input type=\"text\" hidden=\"\" name=\"id\" value=\"$info_transportadora[transportadoraID]\">
                        <h2>Alteração de Transportadora</h2>
                        <label for=\"trans\">Transportadora</label>
                        <input type=\"text\" name=\"trans\" value=\"$info_transportadora[nometransportadora]\" id=\"trans\">
                        <label for=\"endereco\">Endereço</label>
                        <input type=\"text\" name=\"endereco\" value=\"$info_transportadora[endereco]\" id=\"endereco\">
                        <label for=\"cidade\">Cidade</label>
                        <input type=\"text\" name=\"cidade\"value=\"$info_transportadora[cidade]\" id=\"cidade\">
                        <label for=\"estados\">Estados</label>
                        <select name=\"estados\" id=\"estados\">";
                            $meu_estado = $info_transportadora["estadoID"];
                            while ($linha = mysqli_fetch_assoc($lista_estados)) {
                                if ($meu_estado == $linha["estadoID"]) {
                                    echo "<option value=\"$linha[estadoID]\" selected=\"\">$linha[nome]</option>";
                                } else{
                                    echo "<option value=\"$linha[estadoID]\">$linha[nome]</option>";
                                };
                            };
                            
                        echo "</select>
                        <label for=\"cep\">CEP</label>
                        <input type=\"text\" name=\"cep\" value=\"$info_transportadora[cep]\" id=\"cep\">
                        <label for=\"telefone\">Telefone</label>
                        <input type=\"text\" name=\"telefone\" value=\"$info_transportadora[telefone]\" id=\"telefone\">
                        <label for=\"cnpj\">CNPJ</label>
                        <input type=\"text\" name=\"cnpj\" value=\"$info_transportadora[cnpj]\" id=\"cnpj\">
                        <input type=\"submit\" value=\"Alterar\">
                    </form>
                </div>
            </main>";
            include_once("_incluir/rodape.php"); 
        ?>  
    </body>
</html>

<?php
    // Fechar conexao
    mysqli_close($conection);
?>