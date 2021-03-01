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
				$email->setSubject("Flight Schedule (Arrivals and Departures)");
				$email->addTo($useremail, "User");
				$email->addContent("text/plain", "Toronto (Departures)\n- To Los Angeles (LAX): 11:15AM/11:15\n- To Vancouver (YVR): 3:30PM/15:30 \n \nToronto (Arrivals)\n- From Montreal (YUL) 12:00PM/12:00\n- From New York (JFK) 4:00AM/4:00\n \n \nLos Angeles (Departures)\n- To New York (JFK) 8:15PM/20:15\n- To Vancouver (YVR) 4:45AM/4:45\n \n
Los Angeles (Arrivals)\n- From Toronto (YYZ) 4:45PM/16:45\n- From New York (JFK) 8:00PM/20:00\n \n \nMontreal (Departures)\n- To New York (JFK) 5:00PM/17:00\n- To Toronto (YYZ) 10:35AM/10:35\n \nMontreal (Arrivals)\n- From Vancouver (YVR) 12:00PM/12:00\n \n \nNew York (Departures)\n- To Toronto (YYZ) 10:45PM/22:45\n- To Los Angeles (LAX) 2:00PM/14:00\n \nNew York (Arrivals)\n- From Los Angeles (LAX) 1:15AM/1:15\n- From Montreal (YUL) 6:30PM/18:30\n- From Vancouver (YVR) 3:30AM/3:30\n \n \nVancouver (Departures)\n- To Montreal (YUL) 7:00AM/7:00\n- To New York (JFK) 9:30PM/21:30\n \nVancouver (Arrivals)\n- From Toronto (YYZ) 8:30PM/20:30\n- From Los Angeles (LAX) 7:45PM/19:45");
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
			
