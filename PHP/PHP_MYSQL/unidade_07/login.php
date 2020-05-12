<?php namespace unidade07; ?>
<!DOCTYPE html>
<html lang="pt_BR">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="icon" href="https://phproberto.gallerycdn.vsassets.io/extensions/phproberto/vscode-php-getters-setters/1.2.3/1525759974843/Microsoft.VisualStudio.Services.Icons.Default" type="image/gif" sizes="16x16">
        <link href="_css/estilo.css" rel="stylesheet">
        <link href="_css/login.css" rel="stylesheet">
    </head>
    <body>
        <header>
            <div id="header_central">
                <img src="assets/logo_andes.gif">
                <img src="assets/text_bnwcoffee.gif">
            </div>
        </header>        
        <main>
            <?php
            session_start();
                echo "<div id=\"janela_login\">
                        <form action=\"login.php\" method=\"post\">
                            <label for=\"user\">Usuário</label>
                            <input type=\"text\" name=\"user\" id=\"user\" required=\"\">
                            <label for=\"password\">Senha</label>
                            <input type=\"password\" name=\"password\" id=\"password\" required=\"\">
                            <input type=\"submit\" value=\"Login\">";
                require_once("../conection.php");
                if (isset($_POST['user']) && isset($_POST['password']) && $_POST['user'] != "" && $_POST['password'] != "") {
                    $user = $_POST['user'];
                    $password = $_POST['password'];
                    $login = "select * from clientes where usuario = '$user' and senha = '$password'";
                    $acesso = mysqli_query($conection, $login);
                    $resultado = mysqli_fetch_assoc($acesso);
                    if (!$acesso) {
                        die('Falha ao acesso ao DB!');
                    }
                    if (!isset($resultado)) {
                        echo  "<p>Falha no login</p>";
                    }else{
                        $_SESSION['user_portal'] = $resultado['clienteID'];
                        header("Location: listagem.php");
                    }
            }
            echo "</form></div>";
            ?>
        </main>
        <footer>
            <div id="footer_central">
                <p>ANDES é uma empresa fictícia, usada para o curso PHP Integração com MySQL.</p>
            </div>
        </footer>
    </body>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript"></script>
</html>