<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["send"])){
    $mail=new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host='smtp.gmail.com';
    $mail->SMTPAuth=true;
    $mail->Username='';
    $mail->Password='ylky vwii ldab gseb';
    $mail->SMTPSecure='ssl';
    $mail->Port=465;

    $mail->setFrom('');
    $mail->addAddress($_POST["email"]);

    $mail->isHTML(true);
    $mail->Subject=$_POST["subject"];
    $mail->Body=$_POST["message"];
    $mail->send();


}
