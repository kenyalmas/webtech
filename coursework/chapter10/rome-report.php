<!DOCTYPE html>
<!--Author:
	Date:
	File:	  rome-report.php
	Purpose:
	
-->

<html>
<head>
	<title>Rome Report</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>

	<?php
		$numParties = 0;
		$numTravelers = 0;

		$resFile = fopen("travel.dat", "r");
		$nextRes = trim(fgets($resFile));
		while( !feof($resFile) ) {
			$res = explode(":", $nextRes);
			if ($res[0] == "Rome") {
				$numParties++;
			    $numTravelers += $res[1];
			}
			$nextRes = trim(fgets($resFile));
		}
		fclose ($resFile);


		print ("<h1>ROME TRAVEL REPORT</h1>");
		print ("<p>NUMBER OF PARTIES: $numParties</p>");
		print ("<p>NUMBER OF PEOPLE: $numTravelers</p>");
	?>
</body>
</html>
