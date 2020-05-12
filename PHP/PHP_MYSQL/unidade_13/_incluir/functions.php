<?php

    function SendEmail($data){
        $name = $data['nome'];
        $email = $data['email'];
        $message = $data['mensagem'];

        $destiny = "leonardomarcatti@hotmail.com";
        $sender = "leonardomarcatti@hotmail.com";
        $subject = "Mensagem do CURD";

        return mail($destiny, $subject, $message, $sender);
    };

?>