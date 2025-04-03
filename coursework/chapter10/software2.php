<!DOCTYPE html>
<!--Author: Kenneth Almas
	Date:	04/03/2025
	File:	  software2.php
	Purpose:
	
-->

<html>
<head>
	<title>Software2</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>

	<?php
		$multipleOrders = 0;
		$linuxCopies = 0;
		$macOSCopies = 0;
		$windowsCopies = 0;

		$orderFile = fopen("orders.txt", "r");
		$nextOrder = trim(fgets($orderFile));

		while( !feof($orderFile) ) {
			$order = explode(":", $nextOrder);
			$copies = $order[1];
			$os = $order[0];

			if ($copies > 1) {
				$multipleOrders++;
			}
			switch ($os) {
				case "Linux":
					$linuxCopies += $copies;
					break;
				case "macOS":
					$macOSCopies += $copies;
					break;
				case "Windows":
					$windowsCopies += $copies;
					break;
			}
			$nextOrder = trim(fgets($orderFile));
		}

		fclose ($orderFile);

		print ("<h1>SOFTWARE ORDERS: REPORT</h1>");
		print ("<p>ORDERS FOR MULTIPLE COPIES: $multipleOrders</p>");
		print ("<p>LINUX COPIES ORDERED: $linuxCopies</p>");
		print ("<p>MACINTOSH COPIES ORDERED: $macOSCopies</p>");
		print ("<p>WINDOWS COPIES ORDERED: $windowsCopies</p>");
	?>
</body>
</html>
