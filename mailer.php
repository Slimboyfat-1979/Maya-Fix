<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $emailData = sanitizeMe($_POST);
    $name = $emailData['name'];
    $email = $emailData['email'];
    $phone = $emailData['phone'];
    $message = $emailData['message'];

    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host = 'smtp.titan.email';                     //Set the SMTP server to send through
        $mail->SMTPAuth = true;                                   //Enable SMTP authentication
        $mail->Username = 'info@lookoutdigital.co.nz';                     //SMTP username
        $mail->Password = 'YouLookLikeAThing1979!!';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('info@lookoutdigital.co.nz', 'mailer');
        $mail->addAddress('info@lookoutdigital.co.nz', 'Dave Barnett');
        $mail->addReplyTo($email, $name);
        //Add a recipient
//    $mail->addReplyTo('info@example.com', 'Information');

        //Attachments
//    $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
//    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'New Query!';
        $mail->Body = $message;
        $mail->AltBody = $message;

        $mail->send();
        echo '<script>
          alert("Message has been sent! Redirecting you back to the home page");
          window.location.href="index.php";
          </script>';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

function sanitizeMe($data): array {
    $sanitizedData = array();
    foreach ($data as $key => $value){
        $sanitizedData[$key] = trim(strip_tags(htmlspecialchars($value)));
    }
    return $sanitizedData;
}










?>