<!DOCTYPE html>
<!--Author: Kenneth Almas
	Date:	04/16/2025
	File:	  sales.php 
	Purpose:

-->

<html>
<head>
	<title>Sales Report</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>
	<?php

	$smithSales = array();
	$jonesSales = array();
	$salesReport = fopen("sales-data.txt", "r") or die("Unable to open file!");
	$line = fgets($salesReport);

	while(!feof($salesReport)) {
		$record = explode(":", $line);
		if($record[0] == 'Smith'){
			$smithSales[] = $record[1];
		} elseif($record[0] == 'Jones'){
			$jonesSales[] = $record[1];
		}
		$line = fgets($salesReport);
	}
		
	fclose($salesReport);

	$smithTotal = 0;
	$jonesTotal = 0;
	for($i = 0; $i < sizeof($smithSales); $i++){
		$smithTotal += $smithSales[$i];
	}
	for($i = 0; $i < sizeof($jonesSales); $i++){
		$jonesTotal += $jonesSales[$i];
	}
	print("<h1>Sales Report</h1>");
	print("<table><tr><th>Salesperson</th><th>Total Sales</th></tr>");
	print("<tr><td>Smith</td><td>$smithTotal</td></tr>");
	print("<tr><td>Jones</td><td>$jonesTotal</td></tr>");
	print("</table>");
	?>
</body>
</html>
