<!DOCTYPE html>
<!--Author: Kenneth Almas
	Date:	04/03/2025
	File:	  software1.php
	Purpose:	
-->

<html>
<head>
	<title>Software1</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>

	<?php
		$totalCopies = 0;
		$totalOrders = 0;

		$orderFile = fopen("orders.txt", "r");
		$nextOrder = trim(fgets ($orderFile));

		while( !feof($orderFile) ) {
			$order = explode(":", $nextOrder);
			$copies = $order[1];
			$totalCopies += $copies;
			$totalOrders++;
			$nextOrder = trim(fgets ($orderFile));
		}

		fclose ($orderFile);

		print ("<h1>SOFTWARE ORDERS: REPORT</h1>");
		print ("<p>TOTAL COPIES ORDERED: $totalCopies</p>");
		print ("<p>TOTAL ORDERS: $totalOrders</p>");
	?>
</body>
</html>
