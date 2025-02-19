<!DOCTYPE html>
<!--    author: kenneth almas
        date:   02/18/2025
    File:   travel.php
    Purpose:Chapter 6 Exercise

-->


<html>
<head>
    <title>Travel</title>
    <link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>

    <h1>Travel to Rome</h1>

    <?php
        $numTravelers = $_POST['numTravelers'];
    $numNights = $_POST['numNights'];

    $newReserve = fopen("reservation.txt", "w");
    fputs($newReserve, "Rome:$numTravelers:$numNights\n");
    fclose($newReserve);


    print("<p>Your reservation has been received.");

    ?>

</body>
</html>
