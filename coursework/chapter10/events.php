<!DOCTYPE html>
<!--	Author: Kenneth Almas
		Date:	04/03/2025
		File:	events.php
		Purpose: Chapter 10 Exercise
-->

<html>
<head>
	<title>Events List</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>

<body>
	<?php
		print("<h1>LIST OF EVENTS</h1>");
		$eventFile = fopen("events.txt", "r");
		$nextEvent = trim(fgets($eventFile));

		while (!feof($eventFile)) {
			$event = explode(":", $nextEvent);
			$eventDate = $event[0];
			$bandName = $event[1];

			print("<div><h2>$eventDate</h2><h1>$bandName</h1></div>");
			$nextEvent = trim(fgets($eventFile));
		}
			
	
?>
</body>
</html>
