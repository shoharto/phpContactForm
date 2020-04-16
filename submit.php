<?php

include('db.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$subject = $_REQUEST['subject'];
$message = $_REQUEST['message'];

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();
$mail->Host = 'smtp.mailtrap.io';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = '2a07da80c13a0c';                 // SMTP username
$mail->Password = '729bc8608cea50';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 2525;                                    // TCP port to connect to

$mail->setFrom($email);
$mail->addAddress('shoharto@gmail.com', 'shoharto');     // Add a recipient
$mail->Subject = $subject;
$mail->Body = $message . "Sender Name : " . $name . " Sender E-mail : " . $email;

$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if (!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

$query = mysqli_query($conn, "INSERT INTO contact_form_info( name, email, subject, message) 
    VALUES ('$name','$email','$subject','$message')") or die(mysqli_errno($conn));
mysqli_close($conn);
header("location:index.php?note=success");


