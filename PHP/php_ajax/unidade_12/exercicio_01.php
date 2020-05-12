<!doctype html>
<html lang="pt-BR">
    <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="icon" href="https://phproberto.gallerycdn.vsassets.io/extensions/phproberto/vscode-php-getters-setters/1.2.3/1525759974843/Microsoft.VisualStudio.Services.Icons.Default" type="image/gif" sizes="16x16">
        <title>PHP com AJAX</title>
    </head>
    <body class="container-fluid">
        <form action="" method="post" id="myform" class="col-md-3">
            <div class="form-group row">
                <label for="cep">Digite seu CEP</label>
                <input type="text" name="cep" id="cep" class="form-control" placeholder="Seu CEP">
            </div>
            <div class="form-group row">
                <button type="submit" class="btn btn-success">Busca!</button>
                <button class="btn btn-warning" id="limpar">Limpar</button>
            </div>
        </form>
        <p id="resp"></p>
        <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script type="text/javascript">
        $('#myform').on('submit', function (e) { 
            e.preventDefault();
            let cep = $('#cep').val();
            $.ajax({
                type: "get",
                url: 'https://viacep.com.br/ws/' + cep + '/json',
                beforeSend: () => console.log(cep),                
                success: e => {
                                $('#resp').html('Cidade: ' + e.localidade + ' - ' + e.uf + "<br>" + 'Bairro: ' + e.bairro + "<br>" + 'Logradouro: ' + e.logradouro);
                                $('#myform')[0].reset();
                            },
                error: (e) => console.error(e),
                complete: (e) =>{}      
            });
        });

        $('#limpar').click(e=>$('#resp').html(''));
        </script>
    </body>
</html>