<!DOCTYPE html>
<!--Author: Kenneth Almas
	Date:	3/6/2025
	File:	paint-estimate.php
	Purpose:Chapter 8 Exercise

-->

<html>
<head>
	<title>King Painting</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>

	<h1>King Painting: Paint Estimate</h1>

	<?php
		$roomLength = $_POST['roomLength'];
		$roomWidth = $_POST['roomWidth'];
		$roomHeight = $_POST['roomHeight'];
		$paint = $_POST['paint'];
		$firstTime = $_POST['firstTime'];

		$longWallArea = $roomLength * $roomHeight;
		$wideWallArea = $roomWidth * $roomHeight;
		$ceilingArea = $roomLength * $roomWidth;
		$totalArea = $longWallArea * 2 + $wideWallArea * 2 + $ceilingArea;
		
		if ($paint == "premium") {
			$paintCost = ceil($totalArea / 400) * 20.00;
		}
		else {
			$paintCost = ceil($totalArea / 400) * 15.00;
		}

		$laborCost = ceil($totalArea / 200) * 25.00;
		$totalCost = $paintCost + $laborCost;

		print("<p>Length of room: $roomLength<br>");
		print("Width of room: $roomWidth<br>");
		print("Height of room: $roomHeight</p>");
		print("<p>Paint Cost: $".number_format($paintCost, 2)."<br>");
		print("Labor Cost: $".number_format($laborCost, 2)."</p>");

		if ($firstTime == "yes" && $totalCost > 200) {
		print("We want your service! Since you are a first time customer and your total cost is over $200, we are offering you a 10% discount on your total cost. <br>");	
		print("Your new total cost is: $".number_format($totalCost * 0.9, 2)."<br>");
		} else {
		print("<strong><p>Total Cost: $".number_format($totalCost,2)."</p></strong>");
		}
	?>

</body>
</html>
