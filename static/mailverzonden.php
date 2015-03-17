<?php

header('location: index.php#BestelForm');

require_once('class.phpmailer.php');
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded
$mail             = new PHPMailer();

// input vielden 
$model				= $_POST['WhitchPhone'];
$radioSoort			= $_POST['radioSoort'];
$schade				= $_POST['WhitchDamage'];
$schade2			= $_POST['WhitchDamage2'];
$Fname				= $_POST['Fname'];
$Lname				= $_POST['Lname'];
$FullName			= $_POST['Fname']. " " .$_POST['Lname'];
$email				= $_POST['email'];
$telefoonNummer		= $_POST['telefoonNummer'];
$plaats				= $_POST['plaats'];
$straat				= $_POST['straat'];
$Hnummer			= $_POST['Hnummer'];
$imeiNummer			= $_POST['imeiNummer'];
$ToegangsCode		= $_POST['ToegangsCode'];
$Toevoeging			= $_POST['Toevoeging'];
$mail->IsHTML(true);

$body             = "<table style='width:100%'>" .
					  '<tr>' .
					    "<td style='width:150px;'>Model</td>".
					    "<td>" . $model . "</td>" . 
					  '</tr>' .
					  "<tr>" .
					    "<td>Schade/Vragen</td>".
					    "<td>" . $radioSoort . "</td>" . 
					  "</tr>" .
					  "<tr>" .
					    "<td>Schade</td>".
					    "<td>" . $schade . "</td>" . 
					  "</tr>" .
					  "<tr>" .
					    "<td>Meerdere schades</td>".
					    "<td>" . $schade2 . "</td>" . 
					  "</tr>" .
					  "<tr>" .
					    "<td>Voornaam</td>".
					    "<td>" . $Fname . "</td>" . 
					  "</tr>" .
					  "<tr>" .
					    "<td>Achternaam</td>".
					    "<td>" . $Lname . "</td>" . 
					  "</tr>" .
					  "<tr>" .
					    "<td>E-mail</td>".
					    "<td>" . $email . "</td>" . 
					  "</tr>" .
					  "<tr>" .
					    "<td>TelefoonNummer</td>".
					    "<td>" . $telefoonNummer . "</td>" . 
					  "</tr>" .
					  "<tr>" .
					    "<td>Plaats</td>".
					    "<td>" . $plaats . "</td>" . 
					  "</tr>" .
					  "<tr>" .
					    "<td>Straat</td>".
					    "<td>" . $straat . "</td>" . 
					  "</tr>" .
					   "<tr>" .
					    "<td>Huisnummer</td>".
					    "<td>" . $Hnummer . "</td>" . 
					  "</tr>" .
					   "<tr>" .
					    "<td>Imeinummer</td>".
					    "<td>" . $imeiNummer . "</td>" . 
					  "</tr>" .
					   "<tr>" .
					    "<td>ToegangsCode</td>".
					    "<td>" . $ToegangsCode . "</td>" . 
					  "</tr>" .
					  "<tr>" .
					    "<td style='vertical-align: top;'>Aanvullende Informatie</td>".
					    "<td>" . $Toevoeging . "</td>" . 
					  "</tr>" . 
					"</table>";

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


$mail->SetFrom('bobbiehondeveld@gmail.com', 'BobsTelefoon');

$mail->AddReplyTo("bobbiehondeveld@gmail.com","BobsTelefoon");

$mail->Subject    = "BobsTelefoon";

$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

$mail->MsgHTML($body);

$address = "bobbiehondeveld@gmail.com";
$mail->AddAddress($address, "BobsTelefoon");

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
	 
}


// ----------------------------------------------------------------------------------------------------------------------------


$mail2             = new PHPMailer();

$mail->IsHTML(true);

$body             = "Geachte heer/mevrouw " . $Lname . 
					"<br>Hierbij een bevestiging van de door u gemelde schade/ vraag aan www.BobsPhoneRepair.nl.<br><br>" .
					"Voor meer vragen kunt u altijd mailen naar: bob@bobsphonerepair.nl<br>" .
					"Met vriendelijke groet,<br>".
					"<br>".
					"BobsPhoneRepair";

$mail2->IsSMTP(); // telling the class to use SMTP
$mail2->Host       = "mail.gmail.com"; // SMTP server
$mail2->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
                                            // 1 = errors and messages
                                            // 2 = messages only
$mail2->SMTPAuth   = true;                  // enable SMTP authentication
$mail2->SMTPSecure = "tls";                 // sets the prefix to the servier
$mail2->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
$mail2->Port       = 587;                   // set the SMTP port for the GMAIL server
$mail2->Username   = "bobbiehondeveld@gmail.com";  // GMAIL username
$mail2->Password   = "b0BB13!#";            // GMAIL password


$mail2->SetFrom('bobbiehondeveld@gmail.com', 'BobsTelefoon');

$mail2->AddReplyTo("bobbiehondeveld@gmail.com","BobsTelefoon");

$mail2->Subject    = "BobsTelefoon";

$mail2->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

$mail2->MsgHTML($body);

$address2 = $email;
$mail2->AddAddress($address2, $FullName);


if(!$mail2->Send()) {
  //echo "Mailer Error: " . $mail2->ErrorInfo;
} else {
alert("Hello! I am an alert box!!");
}
    