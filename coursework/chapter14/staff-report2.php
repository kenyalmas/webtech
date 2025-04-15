<!DOCTYPE html>
<!--	Author: Kenneth Almas 
		Date:	04/10/2025
		File:	staff-report2.php
		Purpose:MySQL Exercise
-->

<html>
<head>
	<title>MySQL Query</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>

<body>
<?php

$server = "localhost";
$user = "wbip";
$pw = "wbip123";
$db = "test";

$connect=mysqli_connect($server, $user, $pw, $db);

if( !$connect) 
{
	die("ERROR: Cannot connect to database $db on server $server 
	using user name $user (".mysqli_connect_errno().
	", ".mysqli_connect_error().")");
}
$userQuery = "SELECT * FROM personnel WHERE jobTitle = 'Manager' OR jobTitle = 'accountant'";
$result = mysqli_query($connect, $userQuery);

if (!$result) 
{
	die("Could not successfully run query ($userQuery) from $db: " .	
		mysqli_error($connect) );
}

if (mysqli_num_rows($result) == 0) 
{
	print("No records found with query $userQuery");
}
else 
{ 
	print("<h1>LIST OF EMPLOYEES</h1>");

	print("<table>");
	print("<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Job Title</th><th>Hourly Wage</th></tr>");

		 while ($row = mysqli_fetch_assoc($result))
		{
			print (	"<tr><td>".$row['empID']."</td><td>".$row['firstName']."</td><td>".$row['lastName']."</td><td>".$row['jobTitle']."</td><td>".
			number_format($row['hourlyWage'], 2)."</td></tr>");
		}
	
	
	print("</table");
}

mysqli_close($connect);   // close the connection
 
?>

</body>
</html>
