<?php
    #Cria uma query a ser usada dentro do DB que depois é mostrada.
    $select_consulta = 'select * from transportadoras';
    $resultado = mysqli_query($conection, $select_consulta);
    
    if (!$resultado) {
        echo "<b>ERRO NA CONSULTA!</b>";
    }
    else {
        echo "<table class=\"table col-6 offset-3 table-sm text-center table-hover table-striped table-bordered\">
        <thead class=\"thead-dark\">
            <tr>
                <th scope=\"col\">ID</th>
                <th scope=\"col\">Nome</th>
            </tr>
        </thead>
        <tbody>";
        while ($row = mysqli_fetch_assoc($resultado)) {
            echo "<tr>
            <td>$row[transportadoraID]</td>
            <td>$row[nometransportadora]</td>
            </tr>";
         };
    };
        "</tbody>";
    "</table>";
    #Limpa a memória de um resultado.
    mysqli_free_result($resultado);
    #mysqli_close($conexao) Desconecta do server.
    mysqli_close($conection);
?>