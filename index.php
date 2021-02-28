<!DOCTYPE html>
<html>
	<head>
		<title>Main Page</title>
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
			<h1>Travel Assistant</h1>
			<br>
			<br>
			<form method="GET" action="weather.php">
				<div>
					<label>Check The Weather!</label>
					<input type="text" class="form-control" name="inputLocation" placeholder="Enter a Location!">
					<span class="help-block"></span>
				</div>
				<br>
				<div>
					<input type="submit" class="btn btn-primary" value="Go!">
				</div>
			</form>
			<br>
			<br>
			<div>
				<label>Email Notification</label>
			</div>
			<div>
				<a href="stocks.php" class="btn btn-primary">Email</a>
			</div>
		</div>
	</body>
</html>
