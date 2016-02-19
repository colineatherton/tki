<?php

/* subject and email veriables */

	$emailSubject = 'TKI Membership';
	$webMaster = 'tenyokaiuk@gmail.com';

/* Gathering Data Variables */

	$name = $_POST ['InputName'];
	$email = $_POST ['InputEmail'];
	$location = $_POST ['InputLocation'];
  $background = $_POST ['InputBackground'];

	$body = <<<EOD
<br><hr><br>
A request for membership has been sent from the website.<br>
The details the user has entered are:<br><hr><br>
Name: $name <br>
Email Address: $email <br>
Location: $location <br>
Preferred Date of Appointment: $date <br>
Background: $background <br><hr><br>
If this email is blank please ignore it <br><hr><br>
EOD;

	$headers = "From: $email\r\n";
	$headers .= "Content-type: text/html\r\n";
	$success = mail($webMaster, $emailSubject, $body, $headers);

/* Results rendered as HTML */

	$theResults = <<<EOD
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TENYOKAI INTERNATIONAL</title>
    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/tki.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Anton|Oswald|Fjalla+One' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato|Oswald|Roboto+Condensed|Open+Sans|Roboto' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Noto+Sans|Droid+Sans|Lato|Cabin|BenchNine|Josefin+Sans|Oswald|Roboto+Condensed|Open+Sans|Roboto|Open+Sans+Condensed:300|Titillium+Web' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <!--Nav Bar! //////////////////////////////////////////-->
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="img/mon.png" height="60px" width="60px"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="index.html">HOME<span class="sr-only">(current)</span></a></li>
            <li><a href="history.html">HISTORY</a></li>
            <li><a href="media.html">MEDIA</a></li>
            <li><a href="articles.html">ARTICLES</a></li>
            <li><a href="seminars.html">SEMINARS</a></li>
            <li><a href="attire.html">ATTIRE</a></li>
            <li class="active"><a href="contact.html">CONTACT<span class="sr-only">(current)</span></a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <!-- END OF Nav Bar! //////////////////////////////////-->
<div class="clearfix"></div>
    <!-- TKI ABOUT! /////////////////////////////////////////////-->
    <div class="container-fluid">
        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 contactImage">
        </div>
        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 style">
          <h1>CONTACT</h1>
          <h2>CONTACT THE TENYOKAI INTERNATIONAL</h2>
          <p>CONTACT THE TKI BY EMAIL OR FOLLOW US ON SOCIAL MEDIA.</p>
        </div>
    </div>
    <!-- END OF TKI ABOUT! //////////////////////////////////////-->
   
    <!-- menu tiles //////////////////////////////////////-->
    <div class="container-fluid">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 history media-page">
        <h2>Thank you for your message - The Tenyokai International will be in touch soon</h2>
        <img class="media-heading-img" src="img/mon.png" height="50px" width="50px"><h1 class="media-heading">Email</h1>
        <a href="mailto:info@tenyokai.com"><h2><img src="img/email.png" height="75" width="75">info@tenyokai.com</h2></a>
      </div>
    </div>
    <div class="container-fluid">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 history-invert media-page">
        <img class="media-heading-img" src="img/mon.png" height="50px" width="50px"><h1 class="media-heading">Social</h1>
          <a href="https://twitter.com/tenyokaiintl" target="_blank"><h2><img src="img/twitter.png" height="75" width="75">Twitter</h2></a>
          <a href="https://www.facebook.com/TenyokaiInternational/?fref=nf" target="_blank"><h2><img src="img/facebook.png" height="75" width="75">Facebook</h2></a>
          <a href="https://uk.linkedin.com/in/lee-masters-09a10229" target="_blank"><h2><img src="img/linkedin.png" height="75" width="75">Linkedin</h2></a>
          <a href="https://www.youtube.com/user/LeeMasters/videos" target="_blank"><h2><img src="img/youtube.png" height="75" width="75">YouTube</h2></a>
      </div>
    </div>
    <footer>
      <div class="container-fluid">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <ul>
            <a href="index.html"><li>HOME</li></a>
            <a href="history.html"><li>HISTORY</li></a>
            <a href="media.html"><li>MEDIA</li></a>
            <a href="seminars.html"><li>SEMINARS</li></a>
            <a href="attire.html"><li>ATTIRE</li></a>
            <a href="contact.html"><li>CONTACT</li></a>
          </ul>  
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <ul>
            <a href="mailto:info@tenyokai.com"><li>INFO@TENYOKAI.COM</li></a>
          </ul>  
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <ul>
            <a href="https://twitter.com/tenyokaiintl" target="_blank"><li>TWITTER</li></a>
            <a href="https://www.facebook.com/TenyokaiInternational/?fref=nf" target="_blank"><li>FACEBOOK</li></a>
            <a href="https://uk.linkedin.com/in/lee-masters-09a10229" target="_blank"><li>LINKEDIN</li></a>
            <a href="https://www.youtube.com/user/LeeMasters/videos" target="_blank"><li>YOUTUBE</li></a>
          </ul>  
        </div>
      </div>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
EOD;
echo "$theResults"

?>