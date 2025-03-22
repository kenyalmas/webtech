<!DOCTYPE html>
<!--	Author: Kenneth Almas
		Date:	03/20/2025
		File:	bus-travel.php
		Purpose: Chapter 8 Exercise

-->

<html>
<head>
	<title>BUSINESS TRAVEL</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>

<body>
	<?php
		$tripDate = $_POST['tripDate'];
		$miles = trim($_POST['miles']);		
		$breakfast = $_POST['breakfast'];
		$lunch = $_POST['lunch'];
		$dinner = $_POST['dinner'];		
		$hotel = $_POST['hotel'];

		// Add your code here to calculate the allowances and the total reimbursement
		// Look at the print statements below to determine what variables names to use
		// for each item so that these will display correctly

		$carUse = intval($miles) * 0.35;

		if ( strtolower($breakfast) == "yes") {
			$breakfastAllowance = 6.00;
		} else {
			$breakfastAllowance = 0.00;
		}

		if ( strtolower($lunch) == "yes") {
			$lunchAllowance = 8.50;
		} else {
			$lunchAllowance = 0.00;
		}
			
		if ( strtolower($dinner) == "yes") {
			$dinnerAllowance = 17.50;
		} else {
			$dinnerAllowance = 0.00;
		}

		if ( strtolower($hotel) == "yes") {
			$hotelAllowance = 110.00;
		} else {
			$hotelAllowance = 0.00;
		}

		$total = $carUse + $breakfastAllowance + $lunchAllowance + $dinnerAllowance + $hotelAllowance;
			
		print ("<h1>BUSINESS TRAVEL REIMBURSEMENT FORM</h1>");
		print ("<table><tr><td>CAR USE:</td><td>$" . number_format($carUse, 2) . "</td</tr>
			<tr><td>BREAKFAST ALLOWANCE:</td><td>$" . number_format($breakfastAllowance, 2) . "</td</tr>
			<tr><td>LUNCH ALLOWANCE:</td><td>$" . number_format($lunchAllowance, 2) . "</td</tr>
			<tr><td>DINNER ALLOWANCE:</td><td>$" . number_format($dinnerAllowance, 2) . "</td</tr>
			<tr><td>HOTEL ALLOWANCE:</td><td>$" . number_format($hotelAllowance, 2) . "</td</tr>
			<tr><td><strong>TOTAL REIMBURSEMENT:</strong></td><td><strong>$" . number_format($total, 2) . "</strong></td</tr></table>");
	?>

	<div>
		<button><a href='bus-travel.html'>Return to Order Form</a></button>
	</div>

</body>
</html>
