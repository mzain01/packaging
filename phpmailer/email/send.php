<?php
require '../vendor/autoload.php';
require 'Config.php';
require 'Mailer.php';

$mail = new SendMail($_POST);
$validate = $mail->validate();
if (!$validate['isValid']) {
    echo json_encode(['success' => false, 'message' =>  $validate['errorMsg']]);
    return;
}

$isMailSentToAdmin = $mail->sendEnquiryToAdmin();
if ($isMailSentToAdmin != 'success') {
    echo '<script>alert("Message could not be sent. Please try again later.")</script>';
} else {
    echo '<script>location.assign("../thankyou.php")</script>';
}

class SendMail
{
    protected $data;
    protected $name;
    protected $email;

    public function __construct($data)
    {
        $this->data = $data;
        $this->name = $this->testInput($data['firstname']);
        $this->email = $this->testInput($data['email']);
    }

    public function sendEnquiryToAdmin()
    {
        $mail = new Mailer();
        $sendTo = 'info@needpackaging.com';
        $reciverName = $this->name;
        $bodyContent = $this->getMailContentForAdmin($this->data);
        $html = $bodyContent;
        $subject = 'Enquiry From - ' . $this->name;
        return $mail->sendMail($reciverName, $sendTo, $subject, $html);
    }

    protected function getMailContentForAdmin($data)
    {
        $html = '<!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <title>Email Template</title>
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
                <style>
                * { margin: 0; padding: 0; }
                .sw-email-body { max-width: 540px; width: 100%; margin: 0 auto; font-family: \'Poppins\', sans-serif; }
                .logo { text-align: center; margin-bottom: 8px; }
                .emailheader { text-align: center; background: #c9edff; padding: 20px; }
                .fieldset { border-bottom: 1px solid #c8dbff; padding: 10px; font-size: 15px; }
                .emailbodystart { margin-top: 10px; background: #fff; }
                .messagebody { grid-template-columns: auto; background: #fff; padding: 10px 10px 20px 10px; }
                .footer { text-align: center; background: #000; color: #fff; padding: 20px; font-size: 14px; }
                .footer .link p { font-size: 15px; line-height: 22px; }
                .companytt { font-size: 18px; margin: 0 0 10px 0; }
                .footer a { color: #fff; text-decoration: none; }
                .sw-service { margin: 0 0 8px 0; }
                .logo-header img { width: 200px; margin-bottom: 10px; }
                .emailheader p { font-size: 15px; line-height: 22px; }
                .contactuserdata { font-weight: 600; float: right; width: 66%; flex: 0 0 66%; font-size: 14px; }
                .contactuser { width: 30%; float: left; flex: 0 0 30%; font-size: 14px; }
                .usermessage { line-height: 1.4; width: 100%; margin-top: 15px; }
                .messagebody .contactuser { width: 100%; }
                .clear { clear: both; }
                .ft-service ul { margin-bottom: 5px; }
                .ft-service li { display: inline; padding: 0 4px; }
                .ft-service li a { color: #000; font-weight: 500; font-size: 14px; }
                .address { font-size: 13px; color: #150055; }
                </style>
            </head>
            <body>
            <div class="sw-email-body">
                <div class="emailbodystart">
                    <div class="fieldset">
                        <div class="contactuser">Customer Name</div>
                        <div class="contactuserdata">' . $data['firstname'] . '</div>
                        <div class="clear"></div>
                    </div>
                    <div class="fieldset">
                        <div class="contactuser">Email Address</div>
                        <div class="contactuserdata">' . $data['lastname'] . '</div>
                        <div class="clear"></div>
                    </div>
                    <div class="fieldset">
                        <div class="contactuser">Mobile Number</div>
                        <div class="contactuserdata">' . $data['number'] . '</div>
                        <div class="clear"></div>
                    </div>
                    <div class="fieldset">
                        <div class="contactuser">Service</div>
                        <div class="contactuserdata">' . $data['email'] . '</div>
                        <div class="clear"></div>
                    </div>
                    
                    <div class="fieldset">
                        <div class="contactuser">Message</div>
                        <div class="contactuserdata">' . $data['message'] . '</div>
                        <div class="clear"></div>
                    </div>
                    <div class="footer">
                        <h1 class="companytt">AdsImpression</h1>
                        <div class="ft-service">
                        <ul>
                        </div>
                    </div>
                </div>
            </div>
            </body>
            </html>';
        return $html;
    }

    public function validate()
    {
        $isValid = 1;
        $errorMsg = '';
    
        // Sanitize and test input fields
        $this->data['firstname'] = $this->testInput($this->data['firstname']);
        $this->data['lastname'] = $this->testInput($this->data['lastname']);
        $this->data['number'] = $this->testInput($this->data['number']);
        $this->data['email'] = $this->testInput($this->data['email']);
        $this->data['message'] = $this->testInput($this->data['message']);
        
        // Validate input fields
        if (empty($this->data['firstname'])) {
            $errorMsg = "First name is required.";
            $isValid = 0;
        } elseif (empty($this->data['lastname'])) {
            $errorMsg = "Last name is required.";
            $isValid = 0;
        } elseif (empty($this->data['number'])) {
            $errorMsg = "Phone number is required.";
            $isValid = 0;
        } elseif (empty($this->data['email'])) {
            $errorMsg = "Email is required.";
            $isValid = 0;
        } elseif (empty($this->data['message'])) {
            $errorMsg = "Message is required.";
            $isValid = 0;
        }
    
        return ['isValid' => $isValid, 'errorMsg' => $errorMsg];
    }
    

    protected function testInput($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}
?>
    