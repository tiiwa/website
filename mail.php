<?php

require_once 'vendor/autoload.php';
require_once "config.php";

use PHPMailer\PHPMailer\PHPMailer;

$mail = new PHPMailer();

$mail->IsSMTP();
$mail->CharSet = "UTF-8";
$mail->SMTPSecure = 'tls';
$mail->SMTPDebug = 3;
$mail->Host = SMTP_SERVER;
$mail->Port = (int) SMTP_PORT;
$mail->Username = SMTP_USER;
$mail->Password = SMTP_PASSWORD;
$mail->SMTPAuth = true;


if(isset($_POST['email']) && isset($_POST["name"]) && $_POST["message"]) {
    $mail->setfrom($_POST["email"], $_POST["name"]);

    $mail->AddAddress(EMAIL_RECEPIENT);

    $mail->Subject = $_POST['email'];

    $msg = $_POST['message'];

    $msg = wordwrap($msg, 70);

    $mail->Body = $msg;

    if (! $mail->send()) {

       echo"Message could not be sent. Mailer Error " . $mail->ErrorInfo;

    } else {

        echo LOG_INFO . "Message has been sent";
    }
}