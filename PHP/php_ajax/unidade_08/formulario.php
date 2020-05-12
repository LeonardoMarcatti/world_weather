<?php
    // Criar objeto de conexao
    $conecta = mysqli_connect("localhost","root","","andes");
    if ( mysqli_connect_errno()  ) {
        die("Conexao falhou: " . mysqli_connect_errno());
    }

    // selecao de estados
    $select = "SELECT estadoID, nome ";
    $select .= "FROM estados ";
    $lista_estados = mysqli_query($conecta, $select);
    if(!$lista_estados) {
        die("Erro no banco");
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
        <title>PHP com AJAX</title>        
        <link href="_css/estilo.css" rel="stylesheet">
    </head>

    <body>
        <main>  
            <div id="janela_formulario">                
                <form id="formulario_transportadora" method="post" enctype="multipart/form-data">
                    <label for="nometransportadora">Nome da Transportadora</label>
                    <input type="text" name="nometransportadora" id="nometransportadora">

                    <label for="endereco">Endereço</label>
                    <input type="text" name="endereco" id="endereco">

                    <label for="cidade">Cidade</label>
                    <input type="text" name="cidade" id="cidade">

                    <select name="estados">
                        <?php
                            while($linha = mysqli_fetch_assoc($lista_estados)) {
                        ?>
                            <option value="<?php echo $linha["estadoID"];  ?>">
                                <?php echo ($linha["nome"]);  ?>
                            </option>
                        <?php
                            }
                        ?>                        
                    </select>
                    
                    <input type="submit" value="Confirmar inclusão">
                </form>               
            </div>
            <div id="mensagem">
                <p></p>
            </div>
            <h4></h4>
        </main>
        <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script type="text/javascript">
            $('#formulario_transportadora').submit( function(e){
                e.preventDefault();
                InserirFormuario($(this));
            });

            function InserirFormuario(dados) {
                $.ajax({
                type:"POST",
                data:dados.serialize(),
                url: "inserir_transportadora.php",
                beforeSend:  () => {console.log(dados.serialize())},     
                success: (e) => { let sucesso = $.parseJSON(e)["sucesso"];
                                let mensagem = $.parseJSON(e)["mensagem"];
                                if(sucesso) {
                                    $('#mensagem p').html(mensagem);
                                } else {
                                 $('#mensagem p').html(mensagem);
                                };
                            },
                error:  (e) => { $('#mensagem p').html("Erro no sistema.")},
                complete: (e) => {  $('#mensagem').show();
                                    setInterval(() => {$('#mensagem').fadeOut(500)}, 1000);
                                }
            })
            };
        </script>
    </body>
</html>