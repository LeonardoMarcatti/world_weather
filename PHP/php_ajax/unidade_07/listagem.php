<!DOCTYPE html>
<html lang="pt_BR">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="icon" href="https://phproberto.gallerycdn.vsassets.io/extensions/phproberto/vscode-php-getters-setters/1.2.3/1525759974843/Microsoft.VisualStudio.Services.Icons.Default" type="image/gif" sizes="16x16">
        <style>
            div{margin: 20px; width: 400px;}
            li{list-style: none; display: inline-block;}
            li#nome{margin-right: 10px; width: 230px;}
            li#preco{width: 90px; text-align: left;}
        </style>

        <title>PHP com AJAX</title>
     
    </head>
    <body>
        <?php
            setlocale(LC_ALL, "pt_BR.utf-8");
            echo "<div></div>";
        ?>

        <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script type="text/javascript">
            function teste(e){
                e.forEach(element => {
                    let li = $('<li id="nome">');
                    let li2 = $('<li id="preco">');
                    li.append(element.nomeproduto);
                    li2.append( 'R$' +  '' + element.precounitario.replace('.', ','));
                    $('div').append(li);
                    $('div').append(li2);
                }); 
            };
        </script>
        <script type="text/javascript" src="https://192.168.1.160/programacao/curso/php_ajax/unidade_07/gerar_json.php?callback=teste"></script>
    </body>
</html>