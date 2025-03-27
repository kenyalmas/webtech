<!DOCTYPE html>
<html>
<!--
Programmer: Kenneth Almas     
Date:       03/18/2025
Description  

-->

<head>
    <meta charset="UTF-8">
    <title>Your Veggie Order</title>
    <link href="style.css" rel="stylesheet" type="text/css">

</head>

<body>

<?php

    $lastOrder = fopen("orders.txt", "r");
    $order = fgets($lastOrder);
    list($name,$tomatoes,$baseTotalTomatoes,$totalTomatoeCost,$hotPeppers,$baseTotalHotPeppers,$totalHotPepperCost,$bellPeppers,$baseTotalBellPeppers,$totalBellPepperCost,$cukes,$baseTotalCukes,$totalCukeCost,$totalCount,$totalCost) 
    = explode(":", $order);

    $baseTomatoeCost = 3.00;
    $baseHotPepperCost = 2.00;
    $baseBellPepperCost = 5.00;
    $baseCukeCost = 2.00;

    print("<h1>Your Veggie Order</h1>
    <p>Thank you for your order. Here is a summary of your order:</p>");

    print("
    <table>
    <tr>
    <td>Item</td>
    <td>Quantity</td>
    <td>Cost</td>
    <td>Original Total</td>
    <td>Discounted Total</td>
    </tr>");
    print("<tr>
    <td>Tomatoes</td>
    <td>$tomatoes</td>
    <td>$" . number_format($baseTomatoeCost, 2) . "</td>
    <td>$" . number_format($baseTotalTomatoes, 2) . "</td>
    <td>$" . number_format($totalTomatoeCost, 2) . "</td>
    </tr>");
    print("<tr>
    <td>Hot Peppers</td>
    <td>$hotPeppers</td>
    <td>$" . number_format($baseHotPepperCost, 2) . "</td>
    <td>$" . number_format($baseTotalHotPeppers, 2) . "</td>
    <td>$" . number_format($totalHotPepperCost, 2) . "</td>
    </tr>");
    print("<tr>
    <td>Bell Peppers</td>
    <td>$bellPeppers</td>
    <td>$" . number_format($baseBellPepperCost, 2) . "</td>
    <td>$" . number_format($baseTotalBellPeppers, 2) . "</td>
    <td>$" . number_format($totalBellPepperCost, 2) . "</td>
    </tr>");
    print("<tr>
    <td>Cucumbers</td>
    <td>$cukes</td>
    <td>$" . number_format($baseCukeCost, 2) . "</td>
    <td>$" . number_format($baseTotalCukes, 2) . "</td>
    <td>$" . number_format($totalCukeCost, 2) . "</td>
    </tr>");
    print("<tr>
    <td>Total</td>
    <td>" . $tomatoes + $hotPeppers + $bellPeppers + $cukes . "</td>
    <td></td>
    <td>$" . number_format($baseTotalTomatoes + $baseTotalHotPeppers + $baseTotalBellPeppers + $baseTotalCukes, 2) . "</td>
    <td>$" . number_format($totalTomatoeCost + $totalHotPepperCost + $totalBellPepperCost + $totalCukeCost, 2) . "</td></tr></table>");
    print("<button><a href='plants.html'>Return to Order Form</a></button>");

?>

</body>
</html>