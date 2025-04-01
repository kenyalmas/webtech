<!DOCTYPE html>
<!--	Author:
		Date:
		File:	rainfall-report.php
		Purpose: Chapter9 Exercise

-->

<html>
<head>
	<title>Rainfall Report</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>

<body>
	<h1>Rainfall Report</h1>

	<?php

	$rainReport = fopen("rainfall2007.txt", "r");
	$rainAmount = trim(fgets($rainReport));
	$rainTotal = 0;
	$months = array("January", "February", "March", "April", "May", "June",
					 "July", "August", "September", "October", "November", "December");

	foreach ($months as $month)
	{
	if ($month == "April" || $month == "May" || $month == "June" || $month == "July" || $month == "August")
	}
    ?>

</body>
</html>
