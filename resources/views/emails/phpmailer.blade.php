<?php

//phpmailer libraries

use PHPMailer PHPMailer\PHPMAiler;
use PHPMailer\PHPMailer\Exception;

//include the autoload.php file path

require 'C:\xampp\htdocs\mini_crm\vendor\autoload.php';

//create phpmailer class object. Passing TRUE to the constructor enables exceptions. it makes PHPMailer use exceptions for error reporting.

$mail= new PHPMailer(TRUE);

//open try/catch block to handle the exceptions

try{

	//set the email sender: emailadress and name

	$mail->setFrom('gitongacarol11@gmail.com', 'carol properties');

	//add recipient email and name.

	$mail->addAddress('wanjalacarol01@gmail.com', 'Wanjala Tech');

	//set mail subject

	$mail->Subject('Company Addition');

	//email body

	$mail->body('Your Company has been added');

	//send the mail.

	$mail->send();

}

//PHPMailer exception

catch(Exception $e)
{
	echo $e->errorMessage();
}

//PHP exception (note the backslash to select the global namespace Exception class).

catch(\Exception $e)
{
	echo $e->getmessage();
}


?>

