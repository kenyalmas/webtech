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

	print('<h2>Thank you for your order!</h2> 
        <p> You are coming with ' . $numTickets .
	    ' friends and staying for '. $numNights . ' nights.' .
	    '<br>The cost of your flight will be $' . $airlineCost .
	    '<br>The hotel stay will cost $' . $hotelCost .
	    '<br>Bringing the total cost to $' . $totalCost . '</p>');
	?>

</body>
</html>
