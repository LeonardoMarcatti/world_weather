<!doctype html>
<html>
    <head>
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="icon" href="https://pt.seaicons.com/wp-content/uploads/2016/03/Apps-HTML-5-Metro-icon.png" type="image/png" sizes="16x16">
        <link rel="stylesheet" href="_css/estilo.css">
        <title>PHP com AJAX</title>
    </head>

    <body>
        <div class="container-fruid">
            <div class="form-group row">
                <div class="col">
                    <input type="button" value="JSON" class="btn btn-success col-" id="button">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-6">
                    <div id="listagem"></div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script>
            /*let json = new XMLHttpRequest();
            json.open('GET', '_json/produtos.json', true);
            json.send(null);

            json.onload = ()=>{
                if (json.status ==200) {
                    let response = JSON.parse(json.responseText);                    
                    let ol = $('<ol>');
                    $('#listagem').append(ol);
                    for (let i = 0; i < response.length; i++) {
                       let li = $('<li>');
                       li.append(response[i].nomeproduto + ' ' + 'R$' + response[i].precounitario);
                       ol.append(li);
                    };                    
                } else{
                    $('#listagem').append($('<h1>').html('Erro!'));
                };
            };*/

            //Outra forma de fazer a mesma coisa!
            function GetIntel(){
                $.getJSON('_json/produtos.json').done((data)=>{
                    let ul = $('<ul>');
                    $.each(data, (key, val) => {
                        let li = $('<li class="nome">');
                        let li2 = $('<li class="preco">');
                        li.append(val.nomeproduto);
                        li2.append('R$' + val.precounitario);
                        ul.append(li);
                        ul.append(li2);
                    });
                    $('#listagem').append(ul);
                });
            }
            $('#button').on('click', ()=> {GetIntel();
                $('#button').attr('hidden', '');
                $('#listagem').css('display', 'block');
            });
        </script>
    </body>
</html>