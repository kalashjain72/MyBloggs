<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

try {
    require_once("../model/connection.php");
} catch (error) {
    header("Location: ../view/login.php?message=error=cant_connect_to_data_base");
}
require_once("../model/User.php");
$email=$_POST["email"];


// call user exist function 
try {
    $sql = "SELECT email FROM users WHERE email='$email';";
    $result = mysqli_query($conn, $sql);
} 
catch (error) {
    exit;
}


if ($result->num_rows > 0) {
    $email=$_POST["email"];
try {
      $mail = new PHPMailer(true);
      $mail->SMTPDebug = 0; //Enable verbose debug output
      $mail->isSMTP(); //Send using SMTP
      $mail->Host = 'smtp.gmail.com'; //Set the SMTP server to send through
      $mail->SMTPAuth = true; //Enable SMTP authentication
      $mail->Username = 'kalash.jain@innoraft.com'; //SMTP username
      $mail->Password = 'fvkkexdjizksvdpn'; //SMTP password
      $mail->SMTPSecure = 'ssl'; //Enable implicit TLS encryption
      $mail->Port = 465;
      $mail->setFrom('kalash.jain@innoraft.com');
      $mail->addAddress($email);
      $mail->isHTML(true); //Set email format to HTML
      $mail->Subject = 'Password Rest Link';
      $body = "Click on this link to reset password-- http://localhost:3000/updatepass.php?email=$email";
      $mail->Body = $body;
      $mail->AltBody = $body;
      $mail->send();

      echo 'Message has been sent';
    } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
     
    }
  
}else {
    echo 'User dose not exists';
}
//fvkkexdjizksvdpn
?>

