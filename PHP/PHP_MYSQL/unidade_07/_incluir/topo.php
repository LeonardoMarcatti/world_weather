<header>
    <div id="header_central">
        <?php
            require_once("../conection.php"); 
            $sql = "select nomecompleto from clientes where clienteID = $_SESSION[user_portal]";
            $result = mysqli_query($conection, $sql);
            $row = mysqli_fetch_assoc($result);
            echo "<div id=\"header_saudacao\">
                <h5>Bem Vindo, $row[nomecompleto]
                <a href=\"logout.php\">Sair</a>
                </h5>
            </div>"
        ?>
        <img src="assets/logo_andes.gif">
        <img src="assets/text_bnwcoffee.gif">
    </div>
</header>
