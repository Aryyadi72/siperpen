<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once APPPATH . 'libraries\PHPMailer\src\PHPMailer.php';
require_once APPPATH . 'libraries\PHPMailer\src\SMTP.php';
require_once APPPATH . 'libraries\PHPMailer\src\Exception.php';

//Load Composer's autoloader
// require 'vendor/autoload.php';

class Kirim extends CI_Controller {

	public function index()
	{
        // if (isset($_POST['submit'])) {

            $mail = new PHPMailer(true);

             // Pengaturan SMTP
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'dlcindonesia07@gmail.com';
            $mail->Password = '';
            $mail->Port = 587;

            $mail->setFrom('dlcindonesia07@gmail.com', 'Petugas');
            $mail->addAddress('hifniahhinni@gmail.com', 'Joe User');     
            // $mail->addAddress('ellen@example.com');               
            // $mail->addReplyTo('info@example.com', 'Information');

            //Content
            $mail->isHTML(true);                                  
            $mail->Subject = 'Here is the subject';
            $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            if($mail->send()) {
                echo 'Message has been sent';
            } else {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }

        // } else {
        //     echo "Tekan dulu tombolnya";
        // }
    }
}