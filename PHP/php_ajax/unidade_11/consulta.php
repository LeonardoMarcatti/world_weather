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
                <form id="pesquisarProdutos">
                    <label for="categorias">Categorias</label>
                    <select id="categorias">
                        <option selected="" value="0">Selecione seu Produto</option>
                    </select>
                    <label for="produtos" hidden="" id="labelprodutos">Produtos</label>
                    <select name="produtos" id="produtos" hidden=""></select>
                </form>
            </div>
        </main>
        <script type="text/javascript">
            function retornarCategorias(data) {
                let categorias;
                $.each(data, (key, value) => {
                    categorias += '<option value="' + value.categoriaID + '">' + value.nomecategoria + '</option>';
                });
                $('#categorias').html($('#categorias').html() + categorias);
            };
        </script>
        <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script type="text/javascript" src="https://192.168.1.160/programacao/curso/php_ajax/unidade_11/retornar_categorias.php?callback=retornarCategorias"></script>
        <script type="text/javascript">
            $('#categorias').on('change', function(e){
                let categoriaID = $(this).val();
                if (categoriaID == 0) {
                    $('#labelprodutos').attr('hidden','');
                    $('#produtos').attr('hidden','');
                } else {
                    $('#labelprodutos').removeAttr('hidden');
                    $('#produtos').removeAttr('hidden');  
                };
            $.ajax({
                type: "get",
                url: "https://192.168.1.160/programacao/curso/php_ajax/unidade_11/retornar_produtos.php",
                data: "categoriaID=" + categoriaID,
                success: response => {
                    let produtos
                    $.each($.parseJSON(response), (key, value) => {
                        produtos += '<option value="' + value.produtoID + '">' + value.nomeproduto + '</option>';
                    })
                    $('#produtos').html(produtos);
                    },
                error: (e) => {alert(e)},
                complete: (e) =>console.log($.parseJSON(e.responseText))
            });
        });
        </script>
    </body>
</html>