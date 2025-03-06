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
	$workTrip = $_POST['workTrip'];

	if (isset($_POST['workTrip'])) {
		$workTrip = $_POST['workTrip'];
		if ($workTrip == True) {
			$reimbursement = $milesTraveled * 0.35;
			print("you are traveling for work and will be reimbursed $$reimbursement");
		} elseif ($workTrip == False) {
			$reimbursement = 0;
		}
	} else {
		$workTrip = False;
		$reimbursement = 0;
	}
	$tripCost = ($milesTraveled / $mpg) * $costPerGal;
	print('<h1>Your trip has cost $' . $tripCost . ' so far </h1>');
	print('<p>You have traveled ' . $milesTraveled . ' miles with ' . $mpg . ' miles per gallon at a cost of $' . $costPerGal . ' per gallon. ');
	print("<p>Subracting your reimbursement of $$reimbursement so your total cost is $" . $tripCost - $reimbursement . "</p>");
	?>

</body>
</html>
