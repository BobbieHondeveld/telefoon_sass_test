<?php
require_once('class.phpmailer.php');
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded
error_reporting(0);
$mail             = new PHPMailer();

// input vielden 
$model				= $_POST['WhitchPhone'];
$radioSoort			= $_POST['radioSoort'];
$schade				= $_POST['schade'];
$schade2			= $_POST['schade2'];
$Fname				= $_POST['Fname'];
$Lname				= $_POST['Lname'];
$email				= $_POST['email'];
$telefoonNummer		= $_POST['telefoonNummer'];
$plaats				= $_POST['plaats'];
$straat				= $_POST['straat'];
$Hnummer			= $_POST['Hnummer'];
$imeiNummer			= $_POST['imeiNummer'];
$ToegangsCode		= $_POST['ToegangsCode'];
$Toevoeging			= $_POST['Toevoeging'];

$body             = 'model: ' . $model . "<br>" .
					'radioSoort: ' . $radioSoort . "<br>" .
					'schade: ' . $schade . "<br>" .
					'schade2: ' . $schade2 . "<br>" .
					'Fname: ' . $Fname . "<br>" .
					'Lname: ' . $Lname . "<br>" .
					'email: ' . $email . "<br>" .
					'telefoonNummer: ' . $telefoonNummer . "<br>" .
					'plaats: ' . $plaats . "<br>" .
					'straat: ' . $straat . "<br>" .
					'Hnummer: ' . $Hnummer . "<br>" .
					'imeiNummer: ' . $imeiNummer . "<br>" .
					'ToegangsCode: ' . $ToegangsCode . "<br>" .
					'Toevoeging: ' . $Toevoeging;


$mail->IsSMTP(); // telling the class to use SMTP
$mail->Host       = "mail.gmail.com"; // SMTP server
$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
                                           // 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "tls";                 // sets the prefix to the servier
$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
$mail->Port       = 587;                   // set the SMTP port for the GMAIL server
$mail->Username   = "bobbiehondeveld@gmail.com";  // GMAIL username
$mail->Password   = "b0BB13!#";            // GMAIL password

$mail->SetFrom('bobbiehondeveld@gmail.com', 'First Last');

$mail->AddReplyTo("bobbiehondeveld@gmail.com","First Last");

$mail->Subject    = "Telefoon";

$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

$mail->MsgHTML($body);

$address = "bobbiehondeveld@gmail.com";
$mail->AddAddress($address, "John Doe");


if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "message send";
}
    