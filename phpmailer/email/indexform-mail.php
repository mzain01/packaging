<?php
require '../vendor/autoload.php';
require 'Config.php';
require 'Mailer.php';

$mail = new SendMail($_POST);
$validate = $mail->validate();
if(!$validate['isValid']){
 echo 
 json_encode(['success' => false, 'message' =>  $validate['errorMsg']]);
 return;
}

$isMailSentToAdmin = $mail->sendEnquiryToAdmin();
if($isMailSentToAdmin != 'success'){    
    echo '<script>alert($errorMsg)</script>';
}

// $isUserConfirmationSent = $mail->sendEnquiryConfirmation();
echo '<script>location.assign("../thankyou.php")</script>';

class SendMail {
    protected $data;
    protected $name;
    protected $email;

    public function __construct($data)
    {
        $this->data = $data;
        $this->name = $this->testInput($data['name']);
        $this->mail = $this->testInput($data['mail']);
    }

    public function sendEnquiryToAdmin()
    {
        $mail = new Mailer();
        $sendTo = 'info@richmondwebfactory.com';
        $reciverName = $this->name;
        $bodyContent = $this->getMailContentForAdmin($this->data);
        $html = $bodyContent;
        $subject = 'Enquiry From - '.$this->name;
        return $mail->sendMail($reciverName, $sendTo, $subject, $html);
    }

    protected function getMailContentForAdmin($data)
    {
        $html = '<!DOCTYPE html>
        <html lang="en" >
          <head>
            <meta charset="UTF-8">
            <title>Email Template</title>
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet"> 
            <style>           
            *{margin: 0; padding: 0;} 
            .sw-email-body{max-width: 540px; width: 100%; margin: 0 auto; font-family: \'Poppins\', sans-serif;}
            .logo{text-align: center;margin-bottom: 8px;}
            .emailheader{ text-align: center; background: #c9edff;  padding:20px; }
            .fieldset{border-bottom: 1px solid #c8dbff;   padding: 10px;   font-size: 15px;}
            .emailbodystart{margin-top: 10px; background: #fff;}
            .messagebody{  grid-template-columns: auto;  background: #fff;  padding:10px 10px 20px 10px;  }
            .footer{  text-align: center; background: #c944cf; color: #fff; padding: 20px; font-size: 14px;}
            .footer .link p{font-size: 15px; line-height: 22px;}
            .companytt{  font-size: 18px;  margin: 0 0 10px 0;}
            .footer a{color: #fff; text-decoration: none;}
            .sw-service{margin: 0 0 8px 0;}
            .logo-header img{width: 200px; margin-bottom: 10px;}
            .emailheader p{font-size: 15px; line-height: 22px;} 
            .contactuserdata{font-weight: 600;   float: right;   width: 66%;   flex: 0 0 66%;     font-size: 14px;} 
            .contactuser{width: 30%;  float: left; flex: 0 0 30%; font-size: 14px;} 
            .usermessage{line-height: 1.4;  width: 100%;  margin-top: 15px;}  
            .messagebody .contactuser {width:100%} 
            .clear{clear: both;}   
            .ft-service ul {margin-bottom: 5px;}    
            .ft-service li {display: inline; padding: 0 4px;}    
            .ft-service li a{color:#000; font-weight: 500; font-size: 14px;}  
            .address{font-size: 13px; color:#150055;}    
          </style>           
          </head>
          <body>        
            <div class="sw-email-body">
              <div class="emailheader">
                <div class="logo-header"><img src= "../images/logo.svg" alt="Logo" class="mega-darks-logo"/></div>
                <p>You got an email from your website!</p>
              </div>
              <div class="emailbodystart">
                <div class="fieldset">
                  <div class="contactuser">Customer Name</div>
                  <div class="contactuserdata">'.$data['name'].'</div>
                  <div class="clear"></div>
                </div>
                <div class="fieldset">
                  <div class="contactuser">Email Addrerss</div>
                  <div class="contactuserdata">'.$data['mail'].'</div>
                  <div class="clear"></div>
                </div>
                <div class="fieldset">
                <div class="contactuser">Mobile Number</div>
                <div class="contactuserdata">'.$data['phone'].'</div>
                <div class="clear"></div>
              </div>
              <div class="fieldset">
              <div class="contactuser">subject</div>
              <div class="contactuserdata">'.$data['subject'].'</div>
              <div class="clear"></div>
            </div>
               
                <div class="fieldset messagebody">
                  <div class="contactuser">Customer Message</div>
                  <div class="contactuserdata usermessage">'.$data['message'].'</div>
                  <div class="clear"></div>
                </div>
                <div class="footer">
                <h1 class="companytt">Richmond Web Factory</h1>
                <div class="ft-service">
                <ul>
                <li><a href="https://richmondwebfactory.com/web-design-and-development.php">Websites</a></li>
                <li><a href="https://richmondwebfactory.com/logo-design.php">Logo Design</a></li>
                <li><a href="https://richmondwebfactory.com/video-animation.php">Video Animation</a></li>
                <li><a href="https://richmondwebfactory.com/content-writing.php">Content Writing</a></li>
                </div>
                <p class="address">3934 FM 1960 Rd W Suite 370, Houston, TX 77068, United States</p>
                <div class="link">
                <p><span><i class="fas fa-globe"></i></span><a href="https://richmondwebfactory.com/">www.richmondwebfactory.com</p></a>
                <p>  <span><i class="fas fa-envelope"></i></span><a href="mailto:info@richmondwebfactory.com">info@richmondwebfactory.com</a></p>
                <p> <span><i class="fas fa-phone-alt"></i></span><a href="https://wa.me/+17275928087?text=" target="_blank">(727) 592 8087</a></p>
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
        $this->data['name'] = $this->testInput($this->data['name']);
        $this->data['mail'] = $this->testInput($this->data['mail']);
        $this->data['phone'] = $this->testInput($this->data['phone']);
        $this->data['subject'] = $this->testInput($this->data['subject']);
        $this->data['message'] = $this->testInput($this->data['message']);
        if(empty($this->data['name'])){
           $errorMsg = "Name is required.";
            $isValid = 0;
        } elseif(empty($this->data['phone'])){
            $errorMsg = "Mobile Number is required.";
            $isValid = 0;
        } elseif(empty($this->data['mail'])){
            $errorMsg = "Email is required.";
            $isValid = 0;
        }  elseif(empty($this->data['subject'])){
          $errorMsg = "subject is required.";
          $isValid = 0;
        }  elseif(empty($this->data['message'])){
            $errorMsg = "Please brief about your project.";
            $isValid = 0;
        } 
        return  array('isValid' => $isValid, 'errorMsg' => $errorMsg);
    }

    /**
     * Check input data
     */
    public function testInput($data) 
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}