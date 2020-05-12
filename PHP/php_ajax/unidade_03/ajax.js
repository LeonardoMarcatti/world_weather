//Essa forma é utilizada para carregar aquivos php e html.

$.ajax({
    type: 'get',
    url: "nome.php",
    timeout: 2000,
    //beforeSend: () => alert('Você pode criar uma função que será executada antes do AJAX buscar o que você deseja!'),
    success:  (e) => $('#nome').html(e),
    error: () => $('#nome').html('Falha no ajax')
});



//Se desejar carregar apenas parte de um arquivo php/html use o seguinte comando.
$('#loren').load("nome.html h1");

$.ajax({
    type: "get",
    url: "https://www.google.com/",
    success: function (response) {
        console.log($(response).find("#hplogo"));   
    }
});