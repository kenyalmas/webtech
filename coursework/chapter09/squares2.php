<!DOCTYPE html>
<!--Author:
	Date:
	File:	squares2.php
	Purpose:Chapter 9 Exercise
	
-->
<html>
<head>
	<title>Squares</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>

<body>

	<?php
		$startNum = $_POST['startNum'];
		$endNum = $_POST['endNum'];
		$increment = $_POST['increment'];

		print ("<h1>SQUARES</h1><hr>");

		for ($i = $startNum; $i <= $endNum; $i = $i + $increment)
		{
			$square = $i * $i;
			print ("$i squared is $square<br>");
		}

		print ("<hr>");
	?>

</body>
</html>
