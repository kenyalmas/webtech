<!DOCTYPE html>
<!--	Author: Kenneth Almas
		Date:	03/27/2025
		File:	ticket-printer.php
		Purpose: Chapter 9 Exercise
-->

<html>
<head>
	<title>Ticket Printer</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>

<body>
	<?php
		$ticketFile = fopen ("ticket-count.txt", "r");
		$totalTickets = trim(fgets($ticketFile));
		fclose ($ticketFile);

		for ($i = 1; $i <= $totalTickets; $i = $i + 1)
		{
			print("<p>------------------------------------------------------</p>");
			print("<p>ADMIT 1: Rolling Stones TICKET #$i</p>");
		}
?>
</body>
</html>
