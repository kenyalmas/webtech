<!DOCTYPE html>
<!--Author:
	Date:
	File:	  fixit3.php
	Purpose:  What's wrong here?
			  The total should be $4500 based on the numbers in
			  sales.txt, but the program is  calculating the total
			  as $1200 (which happens to be two times
			  the last number in the file .. hmmm...)
-->

<html>

<head>
    <title>FixIt3</title>
    <link rel="stylesheet" type="text/css" href="sample.css">
</head>

<body>

    <?php
    $totalSales = 0;
    $salesFile = fopen("sales.txt", "r");
    while (!feof($salesFile)) {
        $nextSale = trim(fgets($salesFile));
        if ($nextSale != "") {
            $totalSales = $totalSales + $nextSale;
        }
    }
    fclose($salesFile);

    print("<p>TOTAL SALES: $$totalSales</p>");

    ?>
</body>

</html>
