<?php

if (isset($_POST['email']) | isset($_POST['nome'] && !empty($_POST['email']) | !empty($_POST['nome']) {

    $name = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $message = addslashes($_POST['mensagem']);

    $to = "Gpiresmachado@hotmail.com";
    $subject =  "Contato - GPires";
    $budy = "Nome" .$name. "\r\n".
            "Email" .$email. "\r\n".
            "Mensagem" .$message. "\r\n".
    $header = "From: guiguisotti@hotmail.com" ."\r\n". "Reply-to:"      .$email. "\r\n" ."X= Mailer: PHP/" .phpversion();
    
    if(mail($to, $subject, $budy, $header)){

       echo "Email enviado com sucesso";
    }else{
    	echo "Ocorreu um erro no seu email, contati-me de por maneiras por favor, adoraria conversar contigo sobre este assunto!";
    }
}else{

	echo "Ocorreu um erro no seu email, contate-me de por maneiras por favor, adoraria conversar contigo sobre este assunto!";
} 

?>