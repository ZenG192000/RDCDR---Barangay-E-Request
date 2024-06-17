<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'third_party/PHPMailer/src/Exception.php';
require_once APPPATH . 'third_party/PHPMailer/src/PHPMailer.php';
require_once APPPATH . 'third_party/PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Phpmailer_lib {
    public function __construct() {
        log_message('Debug', 'PHPMailer class is loaded.');
    }

    public function sendMail($to, $subject, $message, $attachment = NULL) {
        $mail = new PHPMailer(TRUE);

        try {
            $mail->setFrom('rdcdr.gov@gmail.com', 'RDCDR');
            $mail->addAddress($to);

            $mail->isHTML(TRUE);
            $mail->Subject = $subject;
            $mail->Body = $message;

            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';  // Specify your SMTP server
            $mail->SMTPAuth = TRUE;
            $mail->Username = 'rdcdr.gov@gmail.com'; // SMTP username
            $mail->Password = 'aqshzqgktdwbaslh';  // SMTP password
            $mail->SMTPSecure = 'tls'; // Encryption (tls or ssl)
            $mail->Port = 587; // Port

            $mail->send();
            return TRUE;
        } catch (Exception $e) {
            return "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
