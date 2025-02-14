<!DOCTYPE html>
<!--	Author: Kenneth Almas
		Date:   02/14/2025
		File:	fuel-cost.php
		Purpose: Chapter 5 Exercise
-->

<html>
<head>
	<title>Fuel Cost Calculator</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>

<body>
	<?php
    $mpg = $_POST['mpg'];
	$costPerGal = $_POST['costPerGal'];
	$milesTraveled = $_POST['milesTraveled'];
	print($mpg . $costPerGal . $milesTraveled);

	$tripCost = ($milesTraveled / $mpg) * costPerGal;
	print('<h1>Your trip has cost $' . $tripCost . 'so far </h1>');
	print('<p>You have traveled ' . $milesTraveled . ' miles with ' . $mpg . ' miles per gallon at a cost of $' . $costPerGal . ' per gallon');
	?>

</body>
</html>
