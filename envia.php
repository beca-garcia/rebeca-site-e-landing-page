<?php
    // Vamos armazenar os dados recebidos em variáveis 
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $telefone = addslashes($_POST['telefone']);

    // Vamos definir o caminho que os dados serão enviados, no caso um e-mail
    $para = "rebeca.felicissimo@gmail.com";
    // Definir o assunto do email
    $assunto = "Coleta de Dados - Nome do Site";
    // Vamos guardar as informações que o usuário digitou no formulário dentro do corpo do email recebido
    $corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Telefone: ".$telefone;

    //cabeçalho do email
    $cabecalho = "From rebeca.felicissimo@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($para, $assunto, $corpo, $cabecalho)) {
        echo("E-mail enviado com sucesso!");
    } else {
        echo("Houve um erro ao enviar o e-mail.");
    }
?>