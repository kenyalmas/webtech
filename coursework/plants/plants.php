<!DOCTYPE html>
<html>
<!--
Programmer: Kenneth Almas     
Date:       03/18/2025
Description  
This PHP page should calculate and display the cost of the order from plants.html. 
Assign variables for the cost of each tomato, pepper, and cucumber plant. 

You should display the 
    number of each type of plant ordered, and   
        their respective cost, 
    as well as a final total of all of the plants 
    and total order cost. 
    
Your PHP page should have a link to send the user back to the HTML form.  
This page should be displayed in a nice table format.      
-->

<head>
    <meta charset="UTF-8">
    <title>Your Veggie Order</title>
    <link href="style.css" rel="stylesheet" type="text/css">

</head>

<body>

<?php

    $tomatoes = $_POST['tomatoes'];
    $hotPeppers = $_POST['hotPeppers'];
    $bellPeppers = $_POST['bellPeppers'];
    $cukes = $_POST['cukes'];

    $tomatoeCost = 3.00;
    $hotPepperCost = 2.00;
    $bellPepperCost = 5.00;
    $cukeCost = 2.00;

    $totalTomatoeCost = $tomatoes * $tomatoeCost;
    $totalHotPepperCost = $hotPeppers * $hotPepperCost;
    $totalBellPepperCost = $bellPeppers * $bellPepperCost;
    $totalCukeCost = $cukes * $cukeCost;

    print("<h1>Your Veggie Order</h1>
    <p>Thank you for your order. Here is a summary of your order:</p>");
    print("
    <table>
    <tr>
    <td>Item</td>
    <td>Quantity</td>
    <td>Cost</td>
    </tr>");
    print("<tr>
    <td>Tomatoes</td>
    <td>$tomatoes</td>
    <td>$$totalTomatoeCost</td>
    </tr>");
    print("<tr>
    <td>Hot Peppers</td>
    <td>$hotPeppers</td>
    <td>$$totalHotPepperCost</td>
    </tr>");
    print("<tr>
    <td>Bell Peppers</td>
    <td>$bellPeppers</td>
    <td>$$totalBellPepperCost</td>
    </tr>");
    print("<tr>
    <td>Cucumbers</td>
    <td>$cukes</td>
    <td>$$totalCukeCost</td>
    </tr>");
    print("<tr>
    <td>Total</td>
    <td></td>
    <td>$" . $totalTomatoeCost + $totalHotPepperCost + $totalBellPepperCost + $totalCukeCost . "</td></tr></table>");
    print("<button><a href='plants.html'>Return to Order Form</a></button>");

?>

</body>
</html>