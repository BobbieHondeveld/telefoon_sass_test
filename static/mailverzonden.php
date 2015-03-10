<?php
require_once '../class.phpmailer.php';

$from = '<from.gmail.com>';
$to = '<to.yahoo.com>';
$subject = 'Hi!';
$body = "Hi,\n\nHow are you?";

$headers = array(
	'From' => $from,
	'To' => $to,
	'Subject' => $subject,
);

$smtp = Mail::factory('smtp', array(
	'host' => 'ssl://smtp.gmail.com',
	'port' => '465',
	'auth' => true,
	'username' => 'bobbiehondeveld@gmail.com',
	'password' => 'b0BB13!#',
));

$mail = $smtp->send($to, $headers, $body);

if (PEAR::isError($mail)) {
	echo ('<p>' . $mail->getMessage() . '</p>');
} else {
	echo ('<p>Message successfully sent!</p>');
}