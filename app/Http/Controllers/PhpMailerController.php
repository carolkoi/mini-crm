<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Request;

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function

use PHPMailerPHPMailerPHPMailer;
use PHPMailerPHPMailerException;

class PhpMailerController extends Controller {

	public function sendEmail (Request $request) {
  	// is method a POST ?
  	if(Request::isMethod('post')) {

			require 'C:\xampp\htdocs\mini_crm\vendor\Autoload.php';	
															// load Composer's autoloader

			$mail = new PHPMailer(true);                            // Passing `true` enables exceptions

			try {
				// Server settings
	    	$mail->SMTPDebug = 0;                                	// Enable verbose debug output
				$mail->isSMTP();                                     	// Set mailer to use SMTP
				$mail->Host = 'smtp.mailgun.org';												// Specify main and backup SMTP servers
				$mail->SMTPAuth = true;                              	// Enable SMTP authentication
				$mail->Username = 'postmaster@sandbox9e69a6cf176146dab5d18e50e392ee52.mailgun.org';   // SMTP username
				$mail->Password = '2d5f419db2da51fdeba632d9646dced0-3fb021d1-f6cede68';                           // SMTP password              // SMTP password
				$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
				$mail->Port = 587;                                    // TCP port to connect to

				//Recipients
				$mail->setFrom('mbithecarol6@gmail.com', 'carol Properties');
				$mail->addAddress(Request::input('email'), 'caro Techs');	// Add a recipient, Name is optional
				$mail->addReplyTo('mbithecarol6@gmail.com', 'Mailer');
				

				//Attachments (optional)
				// $mail->addAttachment('/var/tmp/file.tar.gz');			// Add attachments
				// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');	// Optional name

				//Content
				$mail->isHTML(true); 																	// Set email format to HTML
				$mail->Subject = Request::input('subject');
				$mail->Body    = Request::input('message');						// message

				$mail->send();
				return back()->with('success','Message has been sent!');
			} catch (Exception $e) {
				return back()->with('error','Message could not be sent.');
			}
		}
    	return view('emails.company.added');
  }
} 