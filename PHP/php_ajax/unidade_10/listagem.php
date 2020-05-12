<?php
    // Criar objeto de conexao
    $conecta = mysqli_connect("localhost","root","","andes");
    if ( mysqli_connect_errno()  ) {
        die("Conexao falhou: " . mysqli_connect_errno());
    }

    // tabela de transportadoras
    $tr = "SELECT * FROM transportadoras ";
    $consulta_tr = mysqli_query($conecta, $tr);
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
    </head>

    <body>        
        <main>  
            <div id="janela_transportadoras">
                <?php
                    while($linha = mysqli_fetch_assoc($consulta_tr)) {                
                        echo "<ul>
                                <li>$linha[cidade]</li>
                                <li>$linha[nometransportadora]</li>
                                <li><a href=\"#\" class=\"excluir\" title=\"$linha[transportadoraID]\">Excluir</a></li>
                            </ul>";
                    };
                ?>
            </div>
        </main>        
        <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script type="text/javascript">
            $('#janela_transportadoras a').on('click', function(e){
                e.preventDefault();
                let id = $(this).attr('title');
                let elemento = $(this).parent().parent();
               $.ajax({
                   type: "post",
                   url: "exclusao.php",
                   data: "transportadoraID=" + id,
                   success: e => {
                                    let sucesso = $.parseJSON(e)['sucesso'];
                                    let mensagem = $.parseJSON(e)['mensagem'];
                                    if (sucesso){
                                        $(elemento).fadeOut(1000);
                                        alert(mensagem);
                                    } else{
                                        alert('Erro na exclusão!');
                                    };
                            },
                   error: e => alert('Erro de sistema!')
                   });
            });
        </script>
    </body>
</html>

<?php
    // Fechar conexao
    mysqli_close($conecta);
?>