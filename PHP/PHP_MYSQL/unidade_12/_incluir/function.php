<?php
    
    date_default_timezone_set('America/Sao_Paulo');

    function GeraCodigo(){
        $alfabeto   = strtoupper("abcdefghijklmnopqrstuvwxyz0123456789");
        $cod = '';
        $tamanho = 25;

        for ($i=0; $i < $tamanho; $i++) { 
            $cod .= substr($alfabeto, rand(0, 36), 1);
        };

        return $cod;
    };

    function GetData(){
        $agora = getdate();
        return $agora['seconds'] . $agora['minutes'] . $agora['hours'] . $agora['mday'] . $agora['mon'] . $agora['year'];
    };

    function retornarErro($numero_erro) {
        $array_erro = array("Sem erro.", "O arquivo enviado excede o limite definido na diretiva upload_max_filesize do php.ini.", "O arquivo excede o limite máximo de 600Kb.", "O upload do arquivo foi feito parcialmente.",     "Nenhum arquivo foi enviado.", "Pasta temporária ausente.", "Falha em escrever o arquivo em disco.", "Uma extensão do PHP interrompeu o upload do arquivo."); 

        return $array_erro[$numero_erro];
    };

    function Publicar($file){
        $tmp = $file['tmp_name'];
        $nome = GeraCodigo() . GetData() . $file['name'];
        $caminho = 'images/product_images/';
        if (move_uploaded_file($tmp, $caminho . $nome)) {
            return array("Sucesso!", $caminho . $nome);
        } else{
           return array(retornarErro($file['error']),""); 
        };        
    };

?>