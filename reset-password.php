<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mini Social - free website template</title>
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
        	<?php 
			include "dbc.php";
				$_SESSION['Email'];
				$Naam = $_SESSION['Email'];
				echo "Welkom " . $Naam; ?>
				<a href="Login.php">Uitloggen</a>
        </div> <!-- end of header -->
	
    	<div id="templatemo_header">
        	<img src="images/templatemo_logo.png" alt="Mini Social" />
        </div> <!-- end of header -->
        
<ul class="menu">
  <li><a href="adminpage.php" class="active"><span>Home</span></a></li>
  <li><a href="editusers.php"><span>Edit Users</span></a></li>
  <li><a href="about.php"><span>About</span></a></li>
  <li><a href="contact.php"><span>Contact</span></a></li>
</ul>
		
    </div> 
	
	<!-- end of sidebar -->

	<div id="templatemo_main">

        <div id="content">
          <form class="form-container" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form-4">
                    <h1>Reset wachtwoord</h1>

                    <p>
                        <input type="password" name="Password" size="20" placeholder="Nieuw wachtwoord" /><br />
                    </p>
                    <p>
                        <input type="password" name="confirmpassword" size="20" placeholder="Confirm wachtwoord" /><br />
                    </p>
                    <input type="hidden" name="reset" value="<?php echo $_GET['reset']; ?>" />
                    <p>
                        <input class="submit-button" type="submit" name="submit" value=" Reset Wachtwoord " />
                    </p>
                </form>
				<?php

include'conn.php';

            if(isset($_POST['submit']))
            {
                $code = $_SESSION['code'];
                $email = $_SESSION['Emailww'];
                $password = $_POST['Password'];
                $password1 = $_POST['confirmpassword'];
                $reset = $_POST['reset'];
            

                if($reset)
                {
                    if($password == $password1)
                    {
                        $query = 
                        "UPDATE medewerkers SET Password = ?
                       , Tempcode = ?
                        WHERE Email =  ? ";

                        $qry=$database->prepare($query);
                        $qry->execute(array($password, $code, $email));
                        echo "<p>Uw wachtwoord is hersteld!</p>";

                        $query = 'UPDATE medewerkers SET Tempcode = "" WHERE Email = ?';
                        $qry=$database->prepare($query);
                        $qry->execute(array($email));
                    } 
                    else 
                    {
                        echo "<p>Wachtwoorden komen niet overeen.</p>";
                    }
            }
            else
            {
            echo "<p>Je link is ongeldig, probeer nogmaals alstublieft!</p>";
                    }
                }
?>
        
        </div> <!-- end of content -->
        
        
    
    </div> <!-- end of main -->
</div>

</html>