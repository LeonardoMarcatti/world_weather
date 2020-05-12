<?php
    #cria a conexão com o DB.
    $server = 'localhost';
    $user = 'root';
    $password = '';
    $db = 'curso_mysql';
    $conection = mysqli_connect($server, $user, $password, $db);
    #mysqli_connect_errno() = Verifica a validade da ultima coneção ao DB efetuada.
    switch (mysqli_connect_errno()) {
        case 2002:
            die('Erro na busca pelo servidor. Verifique o IP do servidor.');
            break;
        case 1045:
            die('Verifique o nome de usuário e/ou senha.');
            break;
        case 1049:
            die('Verifique o nome do DB.');
            break;
        default:
          return null;
            break;
    }
?>