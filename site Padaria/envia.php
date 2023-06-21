<?php

$nome = addslashes($_POST['nome']);
$email = addcslashes($_POST['email']);
$telefone = addcslashes($_POST['telefone']);
$senha = addcslashes($_POST['senha'])

$para = 'vleandro2006@gmail.com';
$assunto = 'coleta de Dados - webdesigner';

$corpo = "Nome " .$nome. "\n"."Email: " .$email."\n"."telefone : ".$telefone;

$cabeca = "From :vleandro2006@hotmail.com"."\n"."Reply-to ".$email."\n"."X=Mailer:PHP/";

if(mail($para,$assunto,$corpo,$cabeca)){
    echo("Email enviado com sucesso")
}
else{
    echo("Houve um erro ao enviar o email")
}


?>