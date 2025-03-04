<!DOCTYPE html>
<!--    Author: Kenneth Almas
        Date:   03/4/2025
        File:    event.php
        Purpose: Chapter 5 Exercise

-->

<html>
<head>
    <title>Performance</title>
    <link rel ="stylesheet" type="text/css" href="sample.css">
</head>

<body>
    <?php
    $firstName = $_POST['firstName'];
    $phoneNumber = $_POST['phoneNumber'];
    $numTickets = $_POST['numTickets'];

    $prePaidFile = fopen("ticket-count.txt", "r");
    $prePaid = fgets($prePaidFile);
    fclose($prePaidFile);

    $numTickets = $numTickets + $prePaid;

    if ($numTickets > 100)
    {
        print('<h1>Sorry, we are sold out</h1>');
        print('<p> We are sold out of tickets for this event</p>');
        print('<p> We apologize for any inconvenience</p>');
        exit();
    } else {
        print('<h1>Thank you for your order ' . $firstName .  '</h1>');
        print('<p>You bought a total of ' . $numTickets . ' tickets</p>');
        print('<p> Electronic copies will be sent to ' . $phoneNumber . '</p>');
    

    $fillPrepaid = fopen("ticket-count.txt", "w");
    fputs($fillPrepaid, $numTickets);
    fclose($fillPrepaid);
    }

    $ticketCost = $numTickets * 35.00;
    print('<h1>Thank you for your order ' . $firstName .  '</h1>');
    print('<p>You bought a total of ' . $numTickets .
        ' tickets for a total cost of $' . $ticketCost . '</p>');
    print('<p> Electronic copies will be sent to ' . $phoneNumber . '</p>');
    ?>

</body>
</html>
