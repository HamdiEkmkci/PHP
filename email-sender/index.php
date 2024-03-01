<?php

require './vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mailer = new PHPMailer();
$mailer->isSMTP();
$mailer->Host = "smtp.example.com";
$mailer->SMTPAuth = true;
$mailer->Username = "test@gmail.com";
$mailer->Password = "password";
$mailer->SMTPSecure = PHPMAILER::ENCRYPTION_SMTPS;
$mailer->Port = 465;


$mailer->setFrom("test@example.com","test");
$mailer->addReplyTo("test@example.com","test");

// $mailer->addAddress("reciepent@example.com","recipientName");
// $mailer->addAddress("reciepent1@example.com","recipient1Name");
// $mailer->addAddress("reciepent2@example.com","recipient2Name");

// $mailer->addCC("ceo@example.com","ceo");
// $mailer->addBCC("finance@example.com","finance");

$mailer->Subject = "this is a test email";
$mailer->isHTML(true);
$mailer->Body = "Sending this email from PHP<br>we are using PHP";
$mailer->AltBody = "Sending this email from PHP.We are using PHP";

$mailer->send();