<?php
error_reporting(-1);

// require 'phpmailer/src/Exceptions.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exceptions;

if(isset($_POST["send"])){
  $mail = new PHPMailer(true);

  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth = true;
  $mail->Username = 'info@mil-data.com';
  $mail->Password = 'dgqncmczygmwjwbr';
  $mail->SMTPSecure = 'ssl';
  $mail->Port = 465;

//   $mail->setForm('info@mil-data.com');

//   $mail->addAddress($_POST["email"]);

  $mail->isHTML(true);

  $mail->Subject = $_POST["subject"];
  $mail->Body = $_POST["message"];

//   $mail->send();

  echo
  "
  <script>
  alert('Sent Successfully');
  document.location.href = 'index.php'
  </script>
  ";
}