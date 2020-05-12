<?php
    $callback;
    if ( isset($_GET['callback'])) {
        $callback =  $_GET['callback'];
    } else {
        $callback =  false;
    };

    //header('Access-Control-Allow-Origin: *');   
    setlocale(LC_ALL, "pt_BR.utf-8");            
    $server = 'localhost';
    $user = 'root';
    $db = 'andes';
    $password = '';
    try {
        $conection = new PDO("mysql:host=$server; dbname=$db", "$user", "$password");
     } catch (Throwable $th) {
        echo 'Erro linha: ' . $th->getLine() . "<br>";
        echo ('Código: ' . $th->getMessage());
    }
    $sql = "select nomeproduto, precounitario, imagempequena from produtos";
    $result = $conection->query($sql, PDO::FETCH_ASSOC);
    foreach ($result as $key => $value) {
        $json[] = $value;
    };
    
    if ($callback) {
        echo $callback . '(' . json_encode($json) . ')';
    } else {
        echo json_encode($json);
    }
    
    $conection = null;
?>