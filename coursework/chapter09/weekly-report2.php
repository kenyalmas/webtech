<!DOCTYPE html>
<!--	Author: Kenneth Almas
		Date:	03/27/2025
		File:	weekly-report2.php
		Purpose: Chapter9 Exercise
		
-->

<html>
<head>
	<title>Weekly Report</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>

<body>
	<h1>Weekly Report</h1>

	<?php
		$weekDays = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
		$weekTotal = 0;
		$paintFile = fopen("weekly-data.txt","r");
		foreach ($weekDays as $day)
		{
			$dayIncome = fgets($paintFile);
			print("<p>$day: $$dayIncome</p>");
		}

		fclose($paintFile);
?>

</body>
</html>
