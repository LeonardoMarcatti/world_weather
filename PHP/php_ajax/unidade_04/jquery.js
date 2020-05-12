//Essa é uma forma usada apenas para arquivos xml;
$.ajax({
    type: "get",
    url: "_xml/produtos.xml",
    success: (e)=> { 
        let ol = $("<ol>");
        $(e).find('produto').each(function(){
            let nome = $(this).find('nomeproduto').text();
            let preco = $(this).find('precounitario').text();
            let precoreal = preco.replace(".", ",");
            let li = $("<li class=\"li\">");
            li.append(nome + ' ' + 'R$' + precoreal);
            ol.append(li);            
        });
        $('#listagem').html(ol);
     }
});