<?php

## CONFIG ##

// include("connectiondb.php");



# LIST EMAIL ADDRESS

$recipient = " syedmuzaffar136@gmail.com"; 



# SUBJECT (Subscribe/Remove)

$subject = "Need Packaging SignUp";

// $ebpage = "App development";



# RESULT PAGE

$location = "/thank-you.php";



## FORM VALUES ##



# DON'T INCLUDE UNFILTERED USER INPUT IN THE MAIL HEADER!

$sender = "info@needpackaging.com";



$name= (isset($_REQUEST['name'])) ? $_REQUEST['name'] : ((isset($_REQUEST['cn'])) ? $_REQUEST['cn']: "not fill by user");

$email=(isset($_REQUEST['email'])) ? $_REQUEST['email'] : ((isset($_REQUEST['em'])) ? $_REQUEST['em']: "not fill by user");

$phone=(isset($_REQUEST['phone'])) ? $_REQUEST['phone'] : ((isset($_REQUEST['pn'])) ? $_REQUEST['pn']: "not fill by user");

$msg=(isset($_REQUEST['msg'])) ? $_REQUEST['msg'] : ((isset($_REQUEST['msg'])) ? $_REQUEST['msg']: "not fill by user");

$service=(isset($_REQUEST['service'])) ? $_REQUEST['service'] : ((isset($_REQUEST['s'])) ? $_REQUEST['s']: "not fill by user");

$package=(isset($_REQUEST['package'])) ? $_REQUEST['package'] : ((isset($_REQUEST['pa'])) ? $_REQUEST['pa']: "not fill by user");

$interest=(isset($_REQUEST['interest'])) ? $_REQUEST['interest'] : ((isset($_REQUEST['i'])) ? $_REQUEST['i']: "not fill by user");

$formtype= isset($_REQUEST['ftype']) ? $_REQUEST['ftype'] : "Form fill buy user verified" ;

$ip=(isset($_REQUEST['ip2loc_ip'])) ? $_REQUEST['ip2loc_ip'] :  "not fill by user";

$cn=(isset($_REQUEST['ip2loc_country'])) ? $_REQUEST['ip2loc_country'] :  "not fill by user";

$re=(isset($_REQUEST['ip2loc_region'])) ? $_REQUEST['ip2loc_region'] :  "not fill by user";

$ci=(isset($_REQUEST['ip2loc_city'])) ? $_REQUEST['ip2loc_city'] :  "not fill by user";

$url=(isset($_REQUEST['fullpageurl'])) ? $_REQUEST['fullpageurl'] : "not fill by user" ;



if(isset($_REQUEST['hiddencapcha']) && $_REQUEST['hiddencapcha'] == "" ){

  if(isset($name) && $name != "" ) 

  {

// echo "abcd";

# MAIL BODY

$subscriber_email = $email;

$subscriber_subject = "THANK YOU FOR CONTACTING TM USA Protection, ONE OF OUR CONSULTANTS WILL REACH YOU SOON.";

$subscriber_email_data = file_get_contents('http://tmusaprotection.com/email/queryFormThankyou.html');





$body = "

<html>

<head>

  <style>

    table {

      width: 100%;

      border-collapse: collapse;

    }

    th, td {

      padding: 10px;

      border: 1px solid #ccc;

    }

    th {

      background-color: #f2f2f2;

    }

  </style>

</head>

<body>

  <h2>New Lead Submission Details</h2>

  <table>

    <tr>

      <th>Name</th>

      <td>$name</td>

    </tr>

    <tr>

      <th>Email</th>

      <td>$email</td>

    </tr>

    <tr>

      <th>Phone Number</th>

      <td>$phone</td>

    </tr>

    <tr>

      <th>Message</th>

      <td>$msg</td>

    </tr>

    <tr>

      <th>Service</th>

      <td>$service</td>

    </tr>

    <tr>

      <th>Package</th>

      <td>$package</td>

    </tr>

    <tr>

      <th>Interest</th>

      <td>$interest</td>

    </tr>

    <tr>

      <th>Form Type</th>

      <td>$formtype</td>

    </tr>

    <tr>

      <th>IP Address</th>

      <td>$ip</td>

    </tr>

    <tr>

      <th>Country</th>

      <td>$cn</td>

    </tr>

    <tr>

      <th>Region</th>

      <td>$re</td>

    </tr>

    <tr>

      <th>City</th>

      <td>$ci</td>

    </tr>

    <tr>

      <th>URL</th>

      <td>$url</td>

    </tr>

  </table>

</body>

</html>

";



// $body .= "Page: ".$ebpage." \n";

// echo 

// if (mysqli_connect_errno()){  echo "Failed to connect to MySQL: " . mysqli_connect_error(); }

// else{ $sql = 'INSERT INTO Leads (Name, Email, Number, Message, Service, Package, Interest, Formtype, Client_IP, Country_IP, Region_IP, City_IP, Page_URL)  

//       VALUES ("'.$name.'", "'.$email.'", "'.$phone.'", "'.$msg.'", "'.$service.'", "'.$package.'", "'.$interest.'", "'.$formtype.'", "'.$ip.'", "'.$cn.'", "'.$re.'", "'.$ci.'", "'.$url.'")';

//       mysqli_query($con,$sql);

//       mysqli_close($con);

// }



// print_r($sql);die;

$headers = "From: " . $sender . "\r\n";

$headers .= "MIME-Version: 1.0\r\n";

$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

# add more fields here if required

## SEND MESSGAE ##



mail( $recipient, $subject, $body,  $headers ) or die ("Mail could not be sent.");

mail( $subscriber_email, $subscriber_subject, $subscriber_email_data, $headers) or die ("Unable to send email to subscriber");

## SHOW RESULT PAGE ##

header( "Location: $location" );

    }

} 

?>

