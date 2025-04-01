<!DOCTYPE html>
<!--	Author: Kenneth Almas
		Date:	03/27/2025
		File:	currency.php
		Purpose:
		
-->

<html>
<head>
	<title>Currency Converter</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>

<body>

	<?php
		$conversionRate = 1.258;

		print("<h1>USA/Canada Currency Converter</h1>");
        print("<p>The current conversion rate from US Dollars to 
                Canadian dollars is ".$conversionRate.". The table
                below shows examples of conversions between 
                $100 and $1,000 (USA Dollars) in $100 increments.</p>
				<table><tr><th>USA $</th><th>Canada $</th></tr>");
                
		for ($i = 100; $i <= 1000; $i = $i + 100){
			$canadianDollars = $i * $conversionRate;
			print("<tr><td>$".$i."</td><td>$".number_format($canadianDollars, 2)."</td></tr>");
		}
		 
		print("</table>");

	?>

</body>
</html>
