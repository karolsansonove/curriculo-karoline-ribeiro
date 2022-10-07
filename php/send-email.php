<?php

    if (isset($_POST['email']) && !empty($_POST['email'])) { // verificando se a variável foi iniciada e se não está vazia
        $nome = addslashes($_POST['nome']);
        $email = addslashes($_POST['email']);
        $mensagem = addslashes($_POST['mensagem']);

        $destino = "karolsansonove@gmail.com";
        $assunto = "Form de Contato - Currículo";
        $corpo = "Nome: ".$nome."\r\n"
                    ."E-mail: ".$email."\r\n"
                    ."Mensagem: ".$mensagem;
        $header = "From:contato@karolribeiro.dev.br\r\n" // e-mail remetente
                    ."Reply-To:".$email."\r\n" // responder para e-mail do form
                    ."X=Mailer:PHP/".phpversion(); // versão do php

        if(mail($destino,$assunto,$corpo,$header)) {
            echo "<script> alertarSucessoEnvio(); </script>";
        } else {
            echo "<script> alertarErroEnvio(); </script>";
        }
    }

?>

<script src="../js/script.js"></script>