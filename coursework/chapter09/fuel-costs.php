<!DOCTYPE html>
<!--	Author: Kenneth Almas
		Date:	03/27/2025
		File:	fuel-costs.php
		Purpose: Chapter 9 Exercise
-->

<html>
<head>
	<title>Fuel Cost Calculator</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>

<body>
    <h1>Fuel Cost Calculator</h1>
	<?php
		$carMake = $_POST['carMake'];
		$carModel = $_POST['carModel'];		
		$mpg = $_POST['mpg'];
		$costPerGallon = $_POST['costPerGallon'];
		
		print("<p>CAR MAKE: ". $carMake."<br>");
		print("<p>CAR MODEL: ".$carModel."<br>");
		print("<p>Miles Per Gallon: ". $mpg."<br>");
		print("<p>Fuel Cost Per Gallon: $". number_format($costPerGallon,2)."</p>");
		print("<table><tr><th>Miles</th><th>Fuel Cost</th></tr>");	
		
		for ($miles = 100; $miles <= 1000; $miles = $miles + 100)
		{
			$fuelCost = ($miles / $mpg) * $costPerGallon;
			print("<tr><td>$miles</td><td>$". number_format($fuelCost,2)."</td></tr>");
		}
		
		print("</table>");
	?>

</body>
</html>
