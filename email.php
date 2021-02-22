<?php
require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try {
    /*$mail->SMTPDebug = SMTP::DEBUG_SERVER;*/
    $mail->isSMTP();
    $mail->Host='smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'femartinsvieira@gmail.com';
    $mail->Password = 'Fernando2727';
    $mail->Port = 587;

    $mail->setFrom('femartinsvieira@gmail.com');
    $mail->addAddress('femartinsvieira@gmail.com');



        $nome = ($_POST['nome']);
        $email = ($_POST['email']);
        $tel = ($_POST['telefone']);
        $mensagem = ($_POST['mensagem']);



    $mail->isHTML(true);
    $mail->Subject = 'Formulario do site Azimut';
    $mail->Body =  "<html>de: {$nome}<br/>email: {$email}<br/>telefone:{$tel}<br>mensagem: {$mensagem}</html>";
    $mail->AltBody = 'Email do formulario do site Azimut';

    $mail->send();
    echo'Email enviado com sucesso '; 
} catch (Exception $e) {
    echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style type="text/css"> 
        a{
            padding:1% 1%;
            text-decoration: none;
            color:#f77334;
        }    
    </style>
</head>
<body>
    <a href="index.html">Voltar</a>
</body>
</html>