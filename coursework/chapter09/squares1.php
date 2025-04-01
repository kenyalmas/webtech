<!DOCTYPE html>
<!--Author: Kenneth Almas
	Date:	03/27/2025
	File:	squares1.php
	Purpose:Chapter 9 Exercise

-->
<html>
<head>
	<title>Squares</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>

<body>

	<?php
		print ("<h1>SQUARES</h1><hr>");

		for ($i = 1; $i <= 10; $i = $i + 1)
		{
			$square = $i * $i;
			print ("<p>$i squared is $square</p>");
		}

		print ("<hr>");

	?>

</body>
</html>
