<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer();

$mail->isSMTP();
$mail->Host = 'smtp.mailtrap.io';
$mail->SMTPAuth = true;
$mail->Username = 'a060d5066c3e2a';
$mail->Password = 'df570bafdd45b6';
$mail->SMTPSecure = 'tls';
$mail->Port = 25;

$mail->setFrom('mikael.olsson@emmio.se', 'Mikael Olsson');
$mail->addReplyTo('mikael.olsson@emmio.se', 'Mikael Olsson');

$mail->addAddress ('mikael.olsson@emmio.se', 'Mikael Olsson');

$mail->Subject = 'Detta är ett testmail';

$mail->Body = "Line 1\r\nLine 2\r\nLine 3";

if(!$mail->send()){
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}else{
    echo 'Message has been sent';
}