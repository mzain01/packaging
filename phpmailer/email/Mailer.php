<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Mailer {
    public function sendMail($reciverName, $sendTo, $subject, $html){
        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);
    
        try {
            //Server settings
            //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                    //Enable verbose debug output
            $mail->isSMTP();                                           //Send using SMTP
            $mail->Host       = 'smtp.zoho.com';                      //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                //Enable SMTP authentication
            $mail->Username   = 'info@needpackaging.com';               //SMTP username
            $mail->Password   = 'Rtg@786321!@#00';                        //SMTP password
            $mail->SMTPSecure = 'tls';                            //Enable implicit TLS encryption
            $mail->Port       = 587;                             //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
            //Recipients
            $mail->setFrom('info@needpackaging.com', 'Need Packaging');
            $mail->addAddress('info@needpackaging.com');                 //Add a recipient
        
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = $html;
            // $mail->AltBody = strip_tags($html);
    
            if($mail->send()){
                return 'success';
            }else{
                return 'Message could not be sent.';
            }
           
        } catch (Exception $e) {
            return "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
