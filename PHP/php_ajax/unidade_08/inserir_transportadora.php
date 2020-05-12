  <?php
    $conecta = mysqli_connect("localhost","root","","andes");
    if ( mysqli_connect_errno()  ) {
        die("Conexao falhou: " . mysqli_connect_errno());
    };

    if(isset($_POST["nometransportadora"])) {
        $nome       = $_POST["nometransportadora"];
        $endereco   = ($_POST["endereco"]);
        $cidade     = ($_POST["cidade"]);
        $estado     = $_POST["estados"];
        
        $inserir = "INSERT INTO transportadoras(nometransportadora,endereco,cidade,estadoID) VALUES('$nome','$endereco','$cidade', $estado)";

        $retorno = array();

        $insere = mysqli_query($conecta, $inserir);
        if ($insere) {
           $retorno["sucesso"] = true;
           $retorno["mensagem"] = 'Inserido com sucesso';
        } else {
            $retorno["sucesso"] = false;
            $retorno["mensagem"] = 'Falha na inserção';
        };
        echo json_encode($retorno);
    };
?>