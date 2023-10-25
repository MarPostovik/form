<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-6.8.1/src/Exception.php';
require 'PHPMailer-6.8.1/src/PHPMailer.php';

$mail = new PHPMailer(true);
$mail->CharSet = 'UTF-8';
$mail->setLanguage('en', 'phpmailer/language/');
$mail->IsHTML(true);

//from
$mail->setFrom('info@example.com', 'Mariia');
//to
$mail->addAddress('accaunt01.13@gmail.com');
//subject
$mail->Subject =' Subject'

$body = '<h1>Email</h1>';

if (trim(!empty($_POST['name'].))){
    $body.='<p><strong>Name:</strong> '.$_POST['name'].'</p>';
}
if (trim(!empty($_POST['eamil'].))){
    $body.='<p><strong>Email:</strong> '.$_POST['email'].'</p>';
}

$mail->Body = $body;

if(!$mail->send()){
    $message = 'message was sent'
}
$response = ['message' => $message];

header('Content-type: application/json');
echo json_encode($response);
?>