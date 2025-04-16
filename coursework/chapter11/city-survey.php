<!DOCTYPE html>
<!--Author:
	Date:
	File:	  city-survey.php
	Purpose:

-->

<html>
<head>
	<title>CITY SURVEY</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>

	<?php
		$citySurvey = array("London", "Paris", "Rome", "Rome", "Paris",
		"Paris", "Paris", "London", "Rome", "Rome",
		"Paris", "London", "Paris", "London", "London",
		"London", "Paris", "London", "Paris", "Rome");

		// Add the code needed to count the number of times that each city occurs in the array
		$i = 0;
		$london = 0;
		$rome = 0;
		$paris = 0;
		while ($i < count($citySurvey)) {
			if ($citySurvey[$i] == "London") {
				$london++;
			} elseif ($citySurvey[$i] == "Paris") {
				$paris++;
			} elseif ($citySurvey[$i] == "Rome") {
				$rome++;
			}
			$i++;
		}

		print ("<h1>CITY SURVEY RESULTS</h1>");
		// display the results in a table
		print("<table>
			<tr><th>City</th><th>Count</th></tr>");
		print("<tr><td>London</td><td>$london</td></tr>");
		print("<tr><td>Paris</td><td>$paris</td></tr>");
		print("<tr><td>Rome</td><td>$rome</td></tr>");
		print("</table>");

		?>
</body>
</html>
