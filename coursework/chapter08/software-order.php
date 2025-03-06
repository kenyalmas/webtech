<!DOCTYPE html>
<!--	Author: Kenneth Almas
		Date:	03/06/2025
		File:	software-order.php
		Purpose:Chapter 8 Exercise
-->

<html>
<head>
	<title>SaveTheWorld Software</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>

	<h1>YOUR ORDER:</h1>

	<?php
		$os = $_POST['os'];
		$numCopies = $_POST['numCopies'];
		if ($numCopies < 0) {
			print("<p><strong>ERROR! You must order at least one copy!</strong></p>");
		} else {

			if ($numCopies < 5) {
				$shippingAndHandling = 3.50;
			} elseif ($numCopies < 10) {
				$shippingAndHandling = 0.75 * $numCopies;
			}else {
				$shippingAndHandling = 0.85 * $numCopies;
			}
			$subTotal = $numCopies * 35.00;
			$salesTax = $subTotal * 0.07;

			$totalCost = $subTotal + $salesTax + $shippingAndHandling;

			print("<table><tr><td>Operating System</td><td>$os</td></tr>");
			print("<tr><td>Number of copies</td><td>$numCopies</td><td>");
			print("<tr><td>Sub-total</td><td align=\"right\">$".number_format($subTotal, 2)."</td></tr>");
			print("<tr><td>Sales tax</td><td align=\"right\">$".number_format($salesTax, 2)."</td></tr>");
			print("<tr><td>Shipping and handling</td><td align=\"right\">$".number_format($shippingAndHandling, 2)."</td></tr>");
			print("<tr><td>TOTAL:</td><td align=\"right\">$".number_format($totalCost, 2)."</td></tr></table>");
	}
	?>

</body>
</html>
