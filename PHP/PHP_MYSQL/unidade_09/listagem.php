<?php require_once("../conection.php"); ?>
<?php
    // tabela de transportadoras
    $tr = "SELECT * FROM transportadoras ";
    $consulta_tr = mysqli_query($conection, $tr);
    if(!$consulta_tr) {
        die("erro no banco");
    }
?>

<!doctype html>
<html>
    <head>
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="icon" href="https://phproberto.gallerycdn.vsassets.io/extensions/phproberto/vscode-php-getters-setters/1.2.3/1525759974843/Microsoft.VisualStudio.Services.Icons.Default" type="image/gif" sizes="16x16">
        <title>Curso PHP INTEGRACAO</title>
        
        <!-- estilo -->
        <link href="_css/estilo.css" rel="stylesheet">
        
        <style>
            div#janela_transportadoras {
                width:600px;
                margin:60px auto 0;
                border:1px solid #EDEDDC;
                font-family:sans-serif;
                font-size:13px;
                color:#9A9668;
            }
            
            div#janela_transportadoras ul {
                margin:0;padding:0; 
                border-bottom:1px solid #EDEDDC;
            }
            
            div#janela_transportadoras ul:last-child {
                border-bottom:none;
            }
            
            div#janela_transportadoras ul:nth-child(odd) {
                background:#EDEDDC;   
            }
            
            div#janela_transportadoras li {
                list-style:none;
                display:inline-block;
                
            }
            
            div#janela_transportadoras li:nth-child(1) {
                width:380px; 
                padding:8px 4px;
            }

            div#janela_transportadoras li:nth-child(2) {
                width:140px;  
                padding:5px 2px;
            }    
            
            div#janela_transportadoras li:nth-child(3) a {
                color:#9A9668;
            }
        </style>
    </head>

    <body>
        <?php include_once("_incluir/topo.php"); ?>
        
        <main>  
            <div id="janela_transportadoras">
                <?php
                    while($linha = mysqli_fetch_assoc($consulta_tr)) {
                ?>
                <ul>
                    <li><?php echo ($linha["nometransportadora"]) ?></li>
                    <li><?php echo $linha["cidade"] ?></li>
                    <li><a href="update.php?codigo=<?php echo $linha["transportadoraID"] ?>">Alterar</a> </li>
                </ul>
                <?php
                    }
                ?>
            </div>
        </main>

        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script type="text/javascript"></script>

        <?php include_once("_incluir/rodape.php"); ?>  
    </body>
</html>

<?php
    // Fechar conexao
    mysqli_close($conecta);
?>