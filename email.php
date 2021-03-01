<!DOCTYPE html>
<html>
	<head>
		<title>Email Notification</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<style>
			.wrapper {
				margin: auto;
				width: 500px;
				padding: 25px;
			}
		</style>
	</head>
	<body>
		<div class="wrapper">
			<h1>Email Notification</h1>
			<br>
			<br>
			<p> The flight schedule has been sent to your email! </p>
			<?php
				$useremail = $_GET['useremail'];
				
				require 'vendor/autoload.php'; // If you're using Composer (recommended)
				// Comment out the above line if not using Composer
				// require("<PATH TO>/sendgrid-php.php");
				// If not using Composer, uncomment the above line and
				// download sendgrid-php.zip from the latest release here,
				// replacing <PATH TO> with the path to the sendgrid-php.php file,
				// which is included in the download:
				// https://github.com/sendgrid/sendgrid-php/releases

				$email = new \SendGrid\Mail\Mail(); 
				$email->setFrom("flight.schedule.00@gmail.com", "Flight Schedule");
				$email->setSubject("Sending with SendGrid is Fun");
				$email->addTo($useremail, "User");
				$email->addContent("text/plain", "and easy to do anywhere \n even with PHP");
				$sendgrid = new \SendGrid(getenv('SENDGRID_API_KEY'));
				try {
					$response = $sendgrid->send($email);
					// print $response->statusCode() . "\n";
					// print_r($response->headers());
					// print $response->body() . "\n";
				} catch (Exception $e) {
					echo 'Caught exception: '. $e->getMessage() ."\n";
				}
			?>
			<br>
			<a href="index.php" class="btn btn-primary">Back</a>
		</div>
	</body>
</html>
			
