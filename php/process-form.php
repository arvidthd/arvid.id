<?php
if (isset($_REQUEST['name'], $_REQUEST['email'])) {

	$name = $_REQUEST['name'];
	$email = $_REQUEST['email'];
	$message = $_REQUEST['message'];

	// Set your email address where you want to receive emails.
	$to = 'arvid.thd@gmail.com';

	$subject = 'Contact Request From Website';
	$headers = 'From: ' . $email . "\r\n" .
	'X-Mailer: PHP/' . phpversion();

	$send_email = mail($to, $subject, $message, $headers);

	echo ($send_email) ? 'success' : 'error';

}
?>