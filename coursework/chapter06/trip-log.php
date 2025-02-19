<!DOCTYPE html>
<!--    author: kenneth almas
        date:   02/18/2025
        File:   trip-log.php
        Purpose: Chapter 6 Exercise

-->

<html>
<head>
    <title>TRIP LOG</title>
    <link rel ="stylesheet" type="text/css" href="sample.css">
</head>

<body>
    <?php
        $tripDate = $_POST['tripDate'];
    $miles = $_POST['miles'];
    $breakfast = $_POST['breakfast'];
    $lunch = $_POST['lunch'];
    $dinner = $_POST['dinner'];
    $hotel = $_POST['hotel'];

    // add the code to append this information to the trip-log.txt file
    $writeLog = fopen("trip-log.txt", "a");
    fputs($writeLog, "$tripDate:$miles:$breakfast:$lunch:$dinner:$hotel");
    fclose($writeLog);



    print("<h1>TRIP LOG</h1>");
    print("<p>Your trip on $tripDate has been added to the Trip Log</p>");


    ?>

</body>
</html>
