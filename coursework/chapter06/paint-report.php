<!DOCTYPE html>
<!--	Author: Kenneth Almas
		Date:   02/18/2025
		File:	paint-report.php
		Purpose: Chapter 6 Exercise
		
-->

<html>
<head>
	<title>Paint Report</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>

<body>
	<h1>MONTHLY REPORT</h1>

	<?php
        $contracts = fopen("paint-contracts.txt", "r");
	for ($i = 1;$i <= 5;$i++) {
	    ${'payment' . $i} = trim(fgets($contracts));
	}
	fclose($contracts);
	$total = $payment1 + $payment2 + $payment3 + $payment4 + $payment5;

	print("<p>INCOME FROM PAINT CONTRACTS:</p><hr>");
	print("<p>$".number_format($payment1, 2)."<br>");
	print("$".number_format($payment2, 2)."<br>");
	print("$".number_format($payment3, 2)."<br>");
	print("$".number_format($payment4, 2)."<br>");
	print("$".number_format($payment5, 2)."</p>");
	print("<hr><p><strong>TOTAL: $".number_format($total, 2)."</strong></p><hr>");
	?>

</body>
</html>
