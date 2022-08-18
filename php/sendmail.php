<?php

session_start();

$name = $_POST["name"];
$email = $_POST["email"];
$tel = $_POST["tel"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$mail_subject = "CONTATO PELO SITE";
$destiny = "paulomacedo.dev@gmail.com";

$mail_message = "Informações do contato \r\n";
$mail_message .= "Nome: $name \r\n";
$mail_message .= "E-mail: $email \r\n";
$mail_message .= "Telefone: $tel \r\n";
$mail_message .= "Assunto: $subject \r\n";
$mail_message .= "Messagem: $message \r\n";

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= "From: $name <$email>";

$wasSent = mail($destiny, $mail_subject, $mail_message, $headers);

if($wasSent){
  $_SESSION["msg"] = "Sua mensagem foi enviada com sucesso!";
  $_SESSION["class"] = "success";
} else {
  $_SESSION["msg"] = "Erro ao enviar mensagem, tente novamente!";  
  $_SESSION["class"] = "error";
}

header('Location: ../index.php#contact');