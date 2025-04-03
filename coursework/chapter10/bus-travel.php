<!DOCTYPE html>
<!--	Author:
		Date:
		File:	bus-travel.php
		Purpose: Chapter 10 Exercise

-->

<html>
<head>
	<title>BUSINESS TRAVEL</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>

<body>
	<?php
		$runningTotal = 0;
	
		$busRecord = fopen("bus-travel.txt", "r");
		$nextRecord = trim(fgets($busRecord));
		
		while (!feof($busRecord)) {
			list($travelDate, $travelMiles, $breakfast, $lunch, $dinner, $hotel) 
				= explode(":", $nextRecord);
			
			$runningTotal += $travelMiles * 0.35;

			if ($breakfast == "YES") {
				$runningTotal += 6.00;
			} 

			if ($lunch == "YES") {
				$runningTotal += 8.50;
			}

			if ($dinner == "YES") {
				$runningTotal += 17.50;
			}

			if ($hotel == "YES") {
				$runningTotal += 110.00;
			}			
			
			$nextRecord = trim(fgets($busRecord));
		}

		fclose($busRecord);
						
		print ("<h1>BUSINESS TRAVEL REIMBURSEMENT SUMMARY</h1>");
		print("<p>Your total reimbursement for this period is $".number_format($runningTotal, 2)."</p>");
	?>

</body>
</html>
