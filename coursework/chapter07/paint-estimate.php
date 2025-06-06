<!DOCTYPE html>
<!--Author: Kenneth Almas
	Date:	02/27/2025
	File:	paint-estimate.php
	Purpose:Chapter 7 Exercise
	
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
		$firstTime = $_POST['firstTime'];

		$longWallArea = $roomLength * $roomHeight;
		$wideWallArea = $roomWidth * $roomHeight;
		$ceilingArea = $roomLength * $roomWidth;
		$totalArea = $longWallArea * 2 + $wideWallArea * 2 + $ceilingArea;
		$paintCost = ceil($totalArea / 400) * 17.00;
		$laborCost = ceil($totalArea / 200) * 25.00;
		$totalCost = $paintCost + $laborCost;

		print("<p>Length of room: $roomLength<br>");
		print("Width of room: $roomWidth<br>");
		print("Height of room: $roomHeight</p>");
		print("<p>Paint Cost: $".number_format($paintCost, 2)."<br>");
		print("Labor Cost: $".number_format($laborCost, 2)."<br>");
		print("Total Cost: $".number_format($totalCost, 2)."</p>");

		if ($firstTime == "yes") {
			$discountedCost = $totalCost - ($totalCost * .1);
			print("<p>We want your service! Since you are a first time customer, we are offering a 10% deduction</p>" .
				"<p>Your actual cost is $" . number_format($discountedCost, 2) . "</p>");
		}
			
	?>

</body>
</html>