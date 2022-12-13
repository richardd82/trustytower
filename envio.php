
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

/* Namespace alias (don't need Exception this time).
use PHPMailer\PHPMailer\PHPMailer;*/

/* Include the Composer generated autoload.php file.
require '.\vendor\autoload.php';*/


$nombre = $_POST['nombre'];
$deQuien = $_POST['email'];
$mensaje = $_POST['mensaje'];


$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPDebug = 2;
$mail->Host = 'mail.trustytower.com';
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = 'info@trustytower.com';
$mail->Password = 'oiuqeacxv3';
$mail->setFrom('info@trustytower.com', 'TrustyTower');
//$mail->addReplyTo('test@hostinger-tutorials.com', 'Your Name');
$mail->addAddress('info@trustytower.com', $nombre);
$mail->Subject = 'MENSAJE DESDE FORMULARIO TRUSTYTOWER.COM';
$mail->msgHTML(file_get_contents('message.html'), __DIR__);
$mail->Body ="<b>Mensaje de:</b> ". $nombre ."<br> <b>Su email es:</b> ".$deQuien."<br> <b>El Mensaje es:</b> <br>".$mensaje;
//$mail->addAttachment('test.txt');
if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Mensaje enviado correctamente';
}
/*
$nombre = $_POST['nombre'];
$deQuien = $_POST['email'];
$mensaje = $_POST['mensaje'];



$to = "richardd82@gmail.com";
$subject = "Asunto del email";
$message = $mensaje;
$headers = "From: ". $deQuien;

mail($to, $subject, $message, $headers);*/
?>
