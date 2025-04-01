<!DOCTYPE html>
<!--	Author: Kenneth Almas
		Date:	03/27/2025
		File:	weekly-report1.php
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
	 	$total =0;
		$badDays = 0;
		$paintFile = fopen("weekly-data.txt","r");

		for ($i = 0; $i < 7; $i = $i + 1)
		{
			$paintData[$i] = fgets($paintFile);
			$total += $paintData[$i];
			if ($paintData[$i] == 0)
			{
				$badDays++;
			}
		}
		$avgDailyIncome = $total / 7;

		fclose($paintFile);
		
		print("<p>TOTAL INCOME FROM PAINT CONTRACTS: ");
		print("$".number_format($total, 2)."</p>");
		print("<p>AVG DAILY INCOME FROM PAINT CONTRACTS: ");
		print("$".number_format($avgDailyIncome, 2)."</p>");
		print("<p>NUMBER OF DAYS with NO INCOME: $badDays.</p>");
	
?>

</body>
</html>
