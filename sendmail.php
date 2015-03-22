<?php
include("header.php");
  // ini_set('display_errors', 'On');
  // error_reporting(E_ALL);
ini_set("SMTP","aspmx.l.google.com");

$error = '';
$name = '';
$email = '';
$subject = '';
$message = '';
$spamcheck = '';

//   if(isset($_REQUEST['send']))
// {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $spamcheck = $_POST['spamcheck'];

    if ($name == '' || $email == '' || $subject == '' || $message == '' || $spamcheck == ''){
     echo "<center><h3>" or die ("Fill in each field, bozo");
	 echo "</h3></center>";
    }
//echo $name, $email, $subject, $message, $spamcheck;
// or try phpmailer!

    // Always set content-type when sending HTML email
    $header = "MIME-Version: 1.0" . "\r\n";
    $header .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    $recipient = "sara.chung@thebluehive.com";
    $header .= "From: $subject";
    $content = "Message: $message";

    mail($recipient, $subject, $content, $header) or die ("Error!");

    echo "Thank you!";
?>