<?php
$emailid=$_GET['emailid'];
$nm=$_GET['nm'];

require '../PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;

//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';

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
$mail->Username = "phpbatch34@gmail.com";

//Password to use for SMTP authentication
$mail->Password = "123@@123";

//Set who the message is to be sent from
$mail->setFrom('phpbatch34@gmail.com','PostKrde');

//Set an alternative reply-to address
$mail->addReplyTo('phpbatch34@gmail.com','PostKrde');

//Set who the message is to be sent to
$mail->addAddress("$emailid", "$nm");
$mail->addAddress('phpbatch34@gmail.com', 'PostKrde');

//Set the subject line
$mail->Subject = 'Confirmation mail';


//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';

$mail->Body = "<h1>Welcome to PostKrde.com</h1><p>Successfully registered on app</p>";


//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} 
else 
{
 echo "<script>alert('Register successfully');</script>";
 echo "<script>window.location='http://localhost/phpbatch34/myapp/register.php'</script>";   
}
