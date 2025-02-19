<!DOCTYPE html>
<!--    Author: Kenneth Almas
        Date:   02/18/2025
    File:   submit-order.php
    Purpose:Chapter 6 Exercise

-->

<html>
<head>
    <title>SaveTheWorld Software</title>
    <link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>

    <h1>SaveTheWorld: Submission Results</h1>

    <?php
    $os = $_POST['os'];
    $numCopies = $_POST['numCopies'];

    $submitOrder = fopen("order.txt", "w");
    fputs($submitOrder, "$os:$numCopies\n");
    fclose($submitOrder);

    print("<p>Your order had been received and will be processed shortly");
    ?>

</body>
</html>
