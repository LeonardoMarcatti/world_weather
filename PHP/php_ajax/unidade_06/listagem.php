<!doctype html>
<html>
    <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="icon" href="https://phproberto.gallerycdn.vsassets.io/extensions/phproberto/vscode-php-getters-setters/1.2.3/1525759974843/Microsoft.VisualStudio.Services.Icons.Default" type="image/gif" sizes="16x16">
        <title>PHP com AJAX</title>
        <link href="_css/estilo.css" rel="stylesheet">
    </head>
    <body>
        <button id="botao" id="json" class="btn btn-warning btn-sm">JSON</button>
        <div id="listagem"></div>
        <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script>
            $('button#botao').click(() => {
                $('#listagem').css('display','block');
                carregarDados();
            }); 
            
            function carregarDados() {
                $.getJSON('gerar_json.php').done((e)=>{ 
                    console.log(e); 
                    let ul = $('<ul>');
                    $.each(e, (key, val) =>{
                        let li = $('<li class="nome">');
                        let li2 = $('<li class="preco">');
                        let li3 = $('<li class="imagem">');
                        let img = $('<img>');
                        li.append(val.nomeproduto);
                        li2.append('R$' + val.precounitario);
                        img.attr('src', val.imagempequena);
                        ul.append(li);
                        ul.append(li2);
                        li3.append(img);
                        ul.append(li3);
                    });
                    $('#listagem').append(ul);
                    }).fail( () => console.error()
                    );
                };
        </script>
    </body>
</html>