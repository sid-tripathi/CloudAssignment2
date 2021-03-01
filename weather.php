<!DOCTYPE html>
<html>
	<head>
		<title>Weather</title>
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
			<h1>Weather</h1>
			<br>
			<br>
			<?php
				error_reporting(0);
				$get = json_decode(file_get_contents('http://ip-api.com/json/'),true);

				$city = $_GET['inputLocation'];
		 		$string = "http://api.openweathermap.org/data/2.5/weather?q=".$city."&units=metric&appid=969f3964ae9da9c6a0e40ec169d52d25";
		 		$data = json_decode(file_get_contents($string),true);
		 
		 		$temp = $data['main']['temp'];
		 		$desc = $data['weather'][0]['description'];
		 		$humid =$data['main']['humidity'];
		 		$wind = $data['wind']['speed'];
			 		
		 		echo "<p> City: ".$city."</p>";
		 		echo "<p> Desc: ".$desc."</p>";
		 		echo "<p> Temp: ".$temp."C </p>";
		 		echo "<p> Humidity: ".$humid."% </p>";
		 		echo "<p> Wind: ".$wind."m/s </p>"; 		
			?>
			<br>
			<a href="index.php" class="btn btn-primary">Back</a>
		</div>
	</body>
</html>
			
