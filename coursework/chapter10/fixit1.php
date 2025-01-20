<!DOCTYPE html>
<!--Author:
	Date:
	File:	  fixit1.php
	Purpose:  What's wrong here?
			The first line in the output does not display an age
-->

<html>

<head>
    <title>FixIt1</title>
    <link rel="stylesheet" type="text/css" href="sample.css">
</head>

<body>

    <?php
    $agesFile = fopen("ages.txt", "r");

    while (!feof($agesFile)) {
        $nextAge = trim(fgets($agesFile));
        if ($nextAge != "") {
            print("The next age is $nextAge<br>");
        }
    }
    fclose($agesFile);
    ?>
</body>

</html>
