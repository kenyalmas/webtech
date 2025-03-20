<!DOCTYPE html>
<html>
<!--
Programmer: Kenneth Almas     
Date:       03/18/2025
Description  
Based on our previous plant order form and php we need to modify to test for several conditions. You will need to test each type plant ordered.

If you order 6 or more of any one plant you will get a 10% discount on that type of plant. Not 10% off the order, just a discount on that type of plant! Show how much you saved and the new cost.

Make sure the order form or PHP displays the images.

Make sure your application that doesn't have issues like:

    negative numbers
    allows abc to be entered
    allow me to large number of plants (100 plants)
    does it tell me how many total plants I ordered

Display total cost of order prior to discount as well as after. Don't forget to show number and cost of each plant type, and total of plants sold.

Also show a message you did or did not qualify for the discount.

Format your output in a table format. Format money to look like money.

Please include ALL HTML, PHP, CSS and image files.     
-->

<head>
    <meta charset="UTF-8">
    <title>Your Veggie Order</title>
    <link href="style.css" rel="stylesheet" type="text/css">

</head>

<body>

<?php
    print("<h1>Your Veggie Order</h1>
    <p>Thank you for your order. Here is a summary of your order:</p>");

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