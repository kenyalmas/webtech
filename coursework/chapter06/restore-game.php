<!DOCTYPE html>
<!--    Author: Kenneth Almas
        Date:   02/18/2025
        File:   restore-game.php
        Purpose: Chapter 6 Exercise
-->

<html>
<head>
    <title>GAME CHARACTER</title>
    <link rel ="stylesheet" type="text/css" href="sample.css">
</head>

<body>
    <h1>GAME CHARACTER</h1>
    <?php
    $saveFile = fopen("game-status.dat", "r");
    $charName = fgets($saveFile);
    $charType = fgets($saveFile);
    $healthTokens = fgets($saveFile);
    $expTokens = fgets($saveFile);
    $supplyTokens = fgets($saveFile);
    fclose($saveFile);

    print("<p>Your character is <strong>$charName</strong> the <strong>$charType</strong>.</p>");
    print("<p>$charName has <strong>$healthTokens</strong> health tokens,
                        <strong>$expTokens</strong> experience tokens, and 
                        <strong>$supplyTokens</strong> supply tokens.</p>");

    ?>

</body>
</html>
