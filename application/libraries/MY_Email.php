<?php

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require_once APPPATH . 'libraries/PHPMailer/src/Exception.php';
require_once APPPATH . 'libraries/PHPMailer/src/PHPMailer.php';
require_once APPPATH . 'libraries/PHPMailer/src/SMTP.php';

class MY_Email extends CI_Email {
    
    public function __construct()
    {
        parent::__construct();
    }
    
    public function send($auto_clear = true)
    {
        try {
            $mail = new PHPMailer(true);
            
            // Pengaturan SMTP
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'dlcindonesia07@gmail.com';
            $mail->Password = 'bwnm  mslq yaes sybe';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port = 465;
            
            // Pengaturan email
            $mail->setFrom('dlcindonesia07@gmail.com', 'Petugas');
            $mail->addAddress($this->to);
            $mail->Subject = $this->subject;
            $mail->msgHTML($this->body);
            
            // Mengirim email
            $mail->send();
            
            return true;
            } catch (Exception $e) {
                log_message('error', 'Email sending failed: ' . $mail->ErrorInfo);
                return false;
            }
    }
}
