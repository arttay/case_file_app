<?php
require_once("../php/var.php");





function clean_string($string) {
	  $bad = array("content-type","bcc:","to:","cc:","href");
	  return str_replace($bad,"",$string);
	}
	

	$email_to = $sendTo;
	//this is the email that this "app" will be send to
	//should be support@redhawdwa.com for this "app"
	
	$email_subject = "Your case file for: ".$name;
	//the email subject line


//end main message

$message = $message."<br />";
$message .= "Case Number: ". $case."<br />";
$message .= "Account Nubmer: ". $account."<br />";





$email_from = $person;
//email address that the message will be from in the email subject


$headers = 'From: '.$email_from."\r\n".
$headers .= 'Reply-To: '.$email_from."\r\n" .
$headers .= "MIME-Version: 1.0\r\n";//this and next line set content type, also allows for html in message
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
@mail($email_to, $email_subject, $message, $headers);  
//^^ part that sends email, obvious param's,






?>