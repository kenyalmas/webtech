<!DOCTYPE html>
<!--Author: Kenneth Almas
	Date:   02/11/2025
	File:	paint-estimate.php
	Purpose:Chapter 5 Exercise

   Receive length, width, & height from paint-estimate.html
   longWalls = length * height
   wideWalls = width * height
   ceiling = length * width
   totalArea = (longWalls * 2) + (wideWalls * 2) + ceiling

   paintCost = 17
   paintCoverage = 400
   paintAmount = totalArea / paintCoverage
   costForPaint = paintAmount * paintCost

   coveragePerHour = 200
   painterHourly = 25.00
   timeToPaint = totalArea / coveragePerHour
   costToPaint = timeToPaint * painterHourly

   TotalCost = costToPaint + costForPaint

   Display length, width, height, totalArea,
   Display costForPaint, costToPaint, TotalCost

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
	$roomWidth  = $_POST['roomWidth'];
	$roomHeight = $_POST['roomHeight'];

	$wallsLong = 2 * ($roomLength * $roomHeight);
	$wallsWide  = 2 * ($roomWidth * $roomHeight);
	$ceiling    = ($roomWidth * $roomLength);
	$totalArea = $wallsWide + $wallsLong + $ceiling;

	$paintCost = 17;
	$paintCoverage = 400;
	$paintAmount = $totalArea / $paintCoverage;
	$costForPaint = $paintAmount * $paintCost;

	$coveragePerHour = 200;
	$painterHourly = 25.00;
	$timeToPaint = $totalArea / $coveragePerHour;
	$costToPaint = $timeToPaint * $painterHourly;

	$totalCost = costToPaint + costForPaint;

	print("<p>Your room length is " . $roomLength . "<br> Your room width is " . $roomWidth .
	"<br> Your room height is " . $roomHeight . "<br> Your total surface area is " . $totalArea
	    . "<br> Your paint cost is " . $paintCost . "<br> Your labor cost is " . $costToPaint
	. "Your total cost is " . $totalCost);



	?>

</body>
</html>
