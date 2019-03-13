<?php
/**
 * This example shows settings to use when sending via Google's Gmail servers.
 */

require '../PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();


//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "pankajsims28@gmail.com";

//Password to use for SMTP authentication
$mail->Password = "methanealcohol;";

//Set who the message is to be sent from
$mail->setFrom('pankajsims28@gmail.com', 'Pankaj');

//Set an alternative reply-to address
$mail->addReplyTo('pankajsims28@gmail.com');

//Set who the message is to be sent to
$mail->addAddress('adawadkarvilekh@gmail.com');
$mail->addAddress('pankajsims28@gmail.com');
$mail->addAddress('jainamit999.indore@gmail.com');

//Set the subject line
$mail->Subject = 'first test mail';


$mail->Body = "<h1>Universal Informatics</h1>"
        . "This is our first test mail in php";


//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';


//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}
