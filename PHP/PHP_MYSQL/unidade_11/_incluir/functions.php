<?php
    $alfabeto = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $tamanho = 50;
    $char = '';
    $resultado = '';
    $data = getdate()['yday'] . getdate()['mon'] . getdate()['year'] . '_' . getdate()['hours'] . getdate()['minutes'] . getdate()['seconds'];

    for ($i=0; $i < $tamanho; $i++){
        $char = substr($alfabeto, rand(rand(0,36),rand(0,36)), 1);
        $resultado .= $char;
    };
    $resultado .= $data;

    function Mostrar($n){
        $array_erro = array(
            "Arquivo enviado com sucesso!", "O arquivo é muito grande.", "O arquivo é muito grande.", "O upload do arquivo foi feito parcialmente.", "Nenhum arquivo foi enviado.", "Pasta temporária ausente.", "Falha em escrever o arquivo em disco.", "Uma extensão do PHP interrompeu o upload do arquivo."); 

            return $array_erro[$n];
    };

    function Publicar($i){
        global $resultado;
        $temp_file = $i['tmp_name'];
        $extension = strchr($i['name'], '.');
        $file = $resultado . $extension;
        $dir = 'uploads/';
        if(move_uploaded_file($temp_file, $dir . $file)){
            $mensagem =  "Arquivo salvo com sucesso!";
        } else{
            $mensagem = Mostrar($i['error']);
        };
        return $mensagem;
    };  

?>