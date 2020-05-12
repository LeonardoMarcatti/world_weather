var criarDeNome = function (primeiroNome='Matheus ', ultimoNome='Alves') {
    console.log(primeiroNome + " " + ultimoNome);
    document.getElementsByTagName('p')[0].innerText = primeiroNome + ultimoNome;
};
criarDeNome();