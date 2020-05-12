<?php require_once("../conection.php");

    if (isset($_GET['codigo'])) {
        $id = $_GET['codigo'];
        $tr = " select * from transportadoras where transportadoraID = $id";
    };

    $con_trans = mysqli_query($conection, $tr);
    if (!$con_trans) {
        die('Erro na consulta');
    };
    $info = mysqli_fetch_assoc($con_trans);

    if (isset($_POST['nometransportadora'])) {
        $tid =  $_POST['transportadoraID'];
        $delete = "delete from transportadoras where transportadoraID = $tid";
        $con_delete = mysqli_query($conection, $delete);
        if (!$con_delete) {
            die('Erro na conexão');
        } else{
            header("location: listagem.php");
        };
    };
?>

<!doctype html>
<html lang="pt_BR">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="icon" href="https://phproberto.gallerycdn.vsassets.io/extensions/phproberto/vscode-php-getters-setters/1.2.3/1525759974843/Microsoft.VisualStudio.Services.Icons.Default" type="image/gif" sizes="16x16">
        <title>Curso PHP INTEGRACAO</title>
        <!-- estilo -->
        <link href="_css/estilo.css" rel="stylesheet">
        <link href="_css/alteracao.css" rel="stylesheet">
    </head>
    <body>
        <?php include_once("_incluir/topo.php"); ?>
        <main>  
        <div id="janela_formulario">
                <form action="exclude.php" method="post">
                    <h2>Exclusão de Transportadoras</h2>
                    
                    <label for="nometransportadora">Nome da Transportadora</label>
                    <input type="text" value="<?php echo ($info["nometransportadora"]) ?>" name="nometransportadora" id="nometransportadora">   

                    <label for="cidade">Cidade</label>
                    <input type="text" value="<?php echo ($info["cidade"])  ?>" name="cidade" id="cidade">

                    <input type="hidden" name="transportadoraID" value="<?php echo $info["transportadoraID"] ?>">
                    <input type="submit" value="Confirmar Exclusão?">                    
                </form>   
            </div>
        </main>
        <?php include_once("_incluir/rodape.php"); ?>

        <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script type="text/javascript"></script>
    </body>
    <?php
        // Fechar conexao
        mysqli_close($conection);
    ?>
</html>