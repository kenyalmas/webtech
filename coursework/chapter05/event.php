<!DOCTYPE html>
<!--	Author: Kenneth Almas
		Date:   02/11/2025
		File:	event.php
		Purpose: Chapter 5 Exercise

-->

<html>
<head>
	<title>Performance</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>

<body>
	<?php
        $firstName = $_POST['firstName'];
	$phoneNumber = $_POST['phoneNumber'];
	$numTickets = $_POST['numTickets'];

	$ticketCost = $numTickets * 35.00;
	print('<h1>Thank you for your order ' . $firstName .  '</h1>');
	print('<p>You bought a total of ' . $numTickets . ' tickets for a total cost of $' . $ticketCost . '</p>');
	print('<p> Electronic copies will be sent to ' . $phoneNumber . '</p>');
	?>

</body>
</html>
