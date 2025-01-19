<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="sample.css">
    <title>Time until Retirement</title>
</head>

<body>

    <?php

    		$client_age = $_POST['client_age'];
    		$result = 65 - $client_age;
    		print ("<h1> YOU HAVE $result YEARS LEFT </h1>");
    		print (" <p><a href = \"calc-retirement.html\">Return to the Input Form</a></p> ");
    ?>

</body>

</html>
