<?php

if($_POST["submit"]) {
    $recipient="jtkoch12@gmail.com";
    $subject="Form to email message";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?><!DOCTYPE HTML>

<html>
	<head>
		<title>Jensen Koch's Portfolio</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<a href="index.html" class="logo">Jensen Koch</a>
									<ul class="icons">
										<li><a href="https://github.com/jtkoch" class="icon brands fa-github"><span class="label">Github</span></a></li>
										<li><a href="https://www.linkedin.com/in/jensen-koch-a85956196/" class="icon brands fa-linkedin"><span class="label">Linkedin</span></a></li>
									</ul>
								</header>

<!-- Form -->
  <h3></h3>

  <?=$thankYou ?>

  <form method="post" action="contact.php">
    <div class="row gtr-uniform">
      <div class="col-6 col-12-xsmall">
        <input type="text" name="sender" id="name" placeholder="Name" />
      </div>
      <div class="col-6 col-12-xsmall">
        <input type="email" name="senderEmail" id="email" placeholder="Email" />
      </div>
      <!-- Break -->
      <div class="col-12">
        <textarea type="text" name="message" id="message" placeholder="Enter your message" rows="6"></textarea>
      </div>
      <!-- Break -->
      <div class="col-12">
        <ul class="actions">
          <li><input type="submit" name="submit" class="primary" value="Send Message" /></li> 
          <li><input type="reset" value="Reset" /></li>
        </ul>
      </div>
    </div>
  </form>
</html>