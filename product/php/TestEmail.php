<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require_once("./include/PHPMailer.php");
require_once("./include/SMTP.php");
require_once("./include/Exception.php");

// echo $_SESSION['id'];
// passing true in constructor enables exceptions in PHPMailer
$mail = new PHPMailer(true);
try {
    // Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER; // for detailed debug output
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->Username = 'ictmualumniportal@gmail.com'; // YOUR gmail email
    $mail->Password = '@ictmu2020'; // YOUR gmail password

    // Sender and recipient settings
    $mail->setFrom('vasubhalodi111@gmail.com', 'Shruti');
    $mail->addAddress('shrutinathavani1127@gmail.com', ' Kush');
    $mail->addReplyTo('shrutinathavani10@gmail.com', 'Shruti'); // to set the reply to

    // Setting the email content
    $mail->IsHTML(true);
    $mail->Subject = "Send email using Gmail SMTP and PHPMailer";
    $pname = $_SESSION['pname'];
    $mail->Body = 'The Quantity Of the' . $pname . 'Is Less Than 1 ,Please Purchase';
    $mail->AltBody = 'Plain text message body for non-HTML email client. Gmail SMTP email body.';

    if($mail->send())
    {
        echo "The Quantity of product is less than 1 please purchasess";
    }
} catch (Exception $e) {
    echo "Error in sending email. Mailer Error: {$mail->ErrorInfo}";
}

?>