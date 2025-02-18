<!DOCTYPE html>
<!--Author: Kenneth Almas
    Date:   02/18/2025
    File:   game-intro.php
    Purpose:Chapter 5 Exercise

-->


<html>
<head>
    <title>game-intro</title>
    <link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>

    <?php
    $charName = $_POST['charName'];
    $charType = $_POST['charType'];
    $healthTokens = $_POST['healthTokens'];
    $expTokens = $_POST['expTokens'];
    $supplyTokens = $_POST['supplyTokens'];

    $healthGold = $healthTokens / 10;
    $expGold = $expTokens / 2;
    $supplyGold = $supplyTokens / 25;
    $totalGold = $expGold + $supplyGold + $healthGold;

    print("<h1>Your Character</h1>");
    print("<p><strong>Character Name:</strong> $charName </p>");
    print("<p><strong>Character Type:</strong> $charType </p>");
    print("<p><strong>Health Tokens:</strong> $healthTokens </p>");
    print("<p><strong>Experience Tokens:</strong> $expTokens </p>");
    print("<p><strong>Supply Tokens:</strong> $supplyTokens </p>");
    print("<p>Total Gold spent:<strong> $totalGold </strong></p>");
    ?>

</body>
</html>
