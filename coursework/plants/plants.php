<!DOCTYPE html>
<html>
<!--
Programmer: Kenneth Almas     
Date:       03/18/2025
Description  
Based on our previous plant order form and php we need to modify ask for
    a name of the buyer as we will be writing our orders to a text file.

In addition to all of the previous requirements we are now writing our orders to a text file. 
Write all important data about the order
    if you don't you may have to calculate it more than once.

Each line of your file will include everything about a single order, 
example 
    the order's name, 
    how many cucumber plants, 
    how many tomato, 
    how many peppers and 
    total plants and 
    total cost. 
Your application will write each order to the file. 

A second php file will display what was written to the file in a nice table format.

Edit your CSS file, change at least 5 things (colors, sizes, fonts, etc).  

-->

<head>
    <meta charset="UTF-8">
    <title>Your Veggie Order</title>
    <link href="style.css" rel="stylesheet" type="text/css">

</head>

<body>

<?php
    print("<h1>Your Veggie Order</h1>
    <p>Thank you for your order. To review your order,<br> click the button on the bottom of the page:</p>");

    $name = $_POST['name'];
    $tomatoes = $_POST['tomatoes'];
    $hotPeppers = $_POST['hotPeppers'];
    $bellPeppers = $_POST['bellPeppers'];
    $cukes = $_POST['cukes'];

    $baseTomatoeCost = 3.00;
    $baseHotPepperCost = 2.00;
    $baseBellPepperCost = 5.00;
    $baseCukeCost = 2.00;

    if ($tomatoes > 5) {
        $tomatoeCost = $baseTomatoeCost * 0.9;
        print("<p>You qualified for a 10% discount on tomatoes!</p>");
    } else {
        $tomatoeCost = $baseTomatoeCost;
        print("<p>You did not qualify for a discount on tomatoes.</p>");
    }

    if ($hotPeppers > 5) {
        $hotPepperCost = $baseHotPepperCost * 0.9;
        print("<p>You qualified for a 10% discount on hot peppers!</p>");
    } else {
        $hotPepperCost = $baseHotPepperCost;
        print("<p>You did not qualify for a discount on hot peppers.</p>");
    }

    if ($bellPeppers > 5) {
        $bellPepperCost = $baseBellPepperCost * 0.9;
        print("<p>You qualified for a 10% discount on bell peppers!</p>");
    } else {
        $bellPepperCost = $baseBellPepperCost;
        print("<p>You did not qualify for a discount on bell peppers.</p>");
    }

    if ($cukes > 5) {
        $cukeCost = $baseCukeCost * 0.9;
        print("<p>You qualified for a 10% discount on cucumbers!</p>");
    } else {
        $cukeCost = $baseCukeCost;
        print("<p>You did not qualify for a discount on cucumbers.</p>");
    }

    $baseTotalTomatoes = $tomatoes * $baseTomatoeCost;
    $baseTotalHotPeppers = $hotPeppers * $baseHotPepperCost;
    $baseTotalBellPeppers = $bellPeppers * $baseBellPepperCost;
    $baseTotalCukes = $cukes * $baseCukeCost;

    $totalTomatoeCost = $tomatoes * $tomatoeCost;
    $totalHotPepperCost = $hotPeppers * $hotPepperCost;
    $totalBellPepperCost = $bellPeppers * $bellPepperCost;
    $totalCukeCost = $cukes * $cukeCost;

    $newOrder = fopen("orders.txt", "w") or die("Unable to open file!");
    fputs($newOrder, "$name:$tomatoes:$baseTotalTomatoes:$totalTomatoeCost:$hotPeppers:$baseTotalHotPeppers:$totalHotPepperCost:$bellPeppers:$baseTotalBellPeppers:$totalBellPepperCost:$cukes:$baseTotalCukes:$totalCukeCost:" . $tomatoes + $hotPeppers + $bellPeppers + $cukes . ":" . $totalTomatoeCost + $totalHotPepperCost + $totalBellPepperCost + $totalCukeCost . "\n");
    fclose($newOrder);


    print("<button><a href='plants.html'>Return to Order Form</a></button>");
    print("<button><a href='plant-order.php'>Review Your Order</a></button>");

?>

</body>
</html>