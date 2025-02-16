<!DOCTYPE html>
<!--Author:
	Date:
	File:	travel.php
	Purpose:Chapter 5 Exercise

-->


<html>
<head>
	<title>Travel</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>

	<h1>Travel to Rome</h1>

	<?php
        $numTickets = $_POST['numTickets'];
	$numNights = $_POST['numNights'];

	$airlineCost = 875.00 * $numTickets;
	$hotelCost = 110.00 * ($numTickets * $numNights);
	$totalCost = $airlineCost + $hotelCost;

	print('<h1>Thank you for your order!</h1> 
            <p> You are coming with ' . $numTickets .'
        friends and staying for '. $numNights . ' nights. </p>');
	print('<p> The cost of your flight will be $' . $airlineCost .'
        The hotel stay will cost $' . $hotelCost .'
        Bringing the total cost to $' . $totalCost . '</p>');

	?>

</body>
</html>
