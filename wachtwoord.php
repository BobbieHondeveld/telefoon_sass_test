<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ToolsForEver</title>
<meta name="keywords" content="mini social, free download, website templates, CSS, HTML" />
<meta name="description" content="Mini Social is a free website template from templatemo.com" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="css/coda-slider.css" type="text/css" media="screen" charset="utf-8" />
<link rel="stylesheet" href="css/cssmenu.css" type="text/css" media="screen" charset="utf-8" />
<link rel="stylesheet" type="text/css" href="css/style.css">

<script src="js/jquery-1.2.6.js" type="text/javascript"></script>
<script src="js/jquery.scrollTo-1.3.3.js" type="text/javascript"></script>
<script src="js/jquery.localscroll-1.2.5.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery.serialScroll-1.2.1.js" type="text/javascript" charset="utf-8"></script>
<script src="js/coda-slider.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery.easing.1.3.js" type="text/javascript" charset="utf-8"></script>

</head>
<body>

<div id="slider">
<?php session_start(); ?>
    <div id="templatemo_sidebar">
    	<div id="templatemo_header">
<a rel="nofollow"><img src="http://www.logomaker.com/logo-images/404056ccf6b655a4.gif"/></a>	
        </div> <!-- end of header -->
	
    	<div id="templatemo_header">
        	
        </div> <!-- end of header -->
        
<ul class="menu">
  <li><a href="Login.php" class="active"><span>Login</span></a></li>
  <li><a href="register.php"><span>Register</span></a></li>
  <li><a href="wachtwoord.php"><span>Wachtwoord Vergeten</span></a></li>
</ul>
		
    </div> 
	
		<div id="templatemo_main">

        <div id="content">
			<h1>Wachtwoord Vergeten</h1>    
				<form style="margin-left:120px;"  class="form-container" action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" class="form-4" >
                   <h1>Wachtwoord vergeten</h1>
                    <p>
                      <input class="form-field" type="text" name="Email" size="20" placeholder="E-mailadres" /><br /><br />
                    </p>
                    <p>
                      <input class="submit-button" type="submit" name="submit" value=" Verzenden " />
                    </p>
                    <p>
						Klik hieronder om terug te gaan.
                    </p>
                        <br/>
                    </form>
       <?php


$conn = mysql_connect("localhost", "root", "");
mysql_select_db("toolsforever", $conn);

if (isset($_POST["submit"]))
{
    $email = mysql_real_escape_string($_POST["Email"]);
    
    $userExists = mysql_fetch_assoc(mysql_query("SELECT Email FROM medewerkers WHERE Email = '$email'"));
	$code = rand(300, 3000);
	$_SESSION['Emailww'] = $userExists["Email"];
	$_SESSION['code'] = $code;
    if($userExists["Email"])
    {
        // Create the unique user password reset key
        $userEmail = $userExists["Email"];

        // Create a url which we will direct them to reset their password
	
        $passwordlink = "<a href='http://localhost/FastDevelopment/reset-password.php?reset=$code'>http://localhost/FastDevelopment/reset-password?reset=$code</a>";

        $body = "Beste gebruiker,<br /><br /> U heeft gevraagd om uw wachtwoord te resetten op onze website.
        Om je wachtwoord te resetten, klik op de link hieronder.<br />
        $passwordlink</a><br /><br />
        Met vriendelijke groet,<br />
        ToolsForEver";

        $header = "MIME-Version: 1.0" . "\r\n";
        $header .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
        $header .= "From: postmaster@localhost \r\n";

        mail($userExists["Email"], "ToolsForEver - Password Reset", $body, $header);

        echo "Je wachtwoord vergeten link is verstuurd naar jouw e-mailadres.";
    }
    else
        echo "Deze gebruiker bestaat niet.";
    }

?>
        
        </div> <!-- end of content -->
        
        
    
    </div> <!-- end of main -->
</div>

	