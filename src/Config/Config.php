<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

// require '../../../../../wp-load.php';


class Config
{
    private $email = "example@domain.com";
    private $name = "example";
    private  $password = "secret_password";

    public function MailContact($template, $subject, $replyto, $address)
    {
        $mail = new PHPMailer(true);
        try {
            //Server settings

            //Enable verbose debug output
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            // $mail->isSMTP();                                            //Send using SMTP
            // $mail->Host       = 'smtp.hostinger.com';                     //Set the SMTP server to send through
            // $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            // $mail->Username   = 'info@huaypoexpeditions.com';                     //SMTP username
            // $mail->Password   = 'infoHuaypoExpition$_24';                               //SMTP password
            // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            // $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            // //Recipients
            // $mail->setFrom('info@huaypoexpeditions.com', 'Huaypo Expeditions');

            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = $this->email;
            $mail->Password   = $this->password;
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;

            //Recipients
            $mail->setFrom($this->email, $this->name);

            $mail->addAddress($address, 'person');
            // $mail->addAddress('huaypoexpeditions@gmail.com');     //Add a recipient
            // $mail->addAddress('info@huaypoexpeditions.com');//Name is optional
            // $mail->addReplyTo($replyto);
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = $template;

            $mail->send();
            return true;
        } catch (Exception $e) {

            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            return false;
        }
    }
    public function get_mail() {}
    public function get_password() {}
    public function get_post() {}
}
