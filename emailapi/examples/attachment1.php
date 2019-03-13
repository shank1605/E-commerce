<!DOCTYPE html>
<html>
    <head>
        <title>Email with attachemnt</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <center>
            <form method="post" enctype="multipart/form-data">    
        <table border="2" cellspacing="5" cellpadding="10">
            <tr>
                <td colspan="2"><center><h1>Send mail with attachemnt</h1></center></td>
            </tr>
            <tr>
                <td>Enter email id</td>
                <td><input type="text" name="emailid"/></td>
            </tr>
            <tr>
                <td>subject</td>
                <td><input type="text" name="sub"/></td>
            </tr>
            <tr>
                <td>body</td>
                <td>
                    <textarea name="msg" cols="30" rows="10"></textarea>
                </td>
            </tr>
            <tr>
                <td>Add Attachment</td>
                <td>
                    <input type="file" name="attachment"/>
                </td>
            </tr>
            <tr>
                <td colspan="2">
            <center><input type="submit" name="s" value="send mail"/></center>
                </td>
            </tr>
        </table>
            </form>
    </center>
    </body>
</html>
<?php
if(isset($_REQUEST['s'])):

$emailid=$_REQUEST['emailid'];     
$subject=$_REQUEST['sub'];
$msg=$_REQUEST['msg'];

$tmp_filename=$_FILES['attachment']['tmp_name'];
$filename=$_FILES['attachment']['name'];

$destination='images/'.$filename;
        
move_uploaded_file($tmp_filename, $destination);


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
$mail->Username = "adawadkarvilekh@gmail.com";

//Password to use for SMTP authentication
$mail->Password = "nimda*123";

//Set who the message is to be sent from
$mail->setFrom('adawadkarvilekh@gmail', 'Vilekh adawadkar');

//Set an alternative reply-to address
$mail->addReplyTo('adawadkarvilekh@gmail');

//Set who the message is to be sent to
$mail->addAddress("$emailid");

//Set the subject line
$mail->Subject = "$subject";


$mail->Body = "<h1>Universal Informatics</h1>"
        . "$msg";



//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';

//Attach an image file
$mail->addAttachment("images/$filename");

//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}



endif;
?>