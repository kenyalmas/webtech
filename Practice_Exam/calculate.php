<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $phoneNumber = $_POST['phoneNumber'];
        $roomLength = $_POST['roomLength'];
        $roomWidth = $_POST['roomWidth'];
        $floorType = $_POST['floorType'];

        $ceramicFloor = 5.27;
        $carpetFloor = 9.90; 
        $woodFloor = 8.70;
        $linoFloor = 3.90;

        $floorCost = 0;
        switch ($floorType) {
            case 'ceramicFloor':
                $floorCost = $ceramicFloor;
                break;
            case 'carpetFloor':
                $floorCost = $carpetFloor;
                break;
            case 'woodFloor':
                $floorCost = $woodFloor;
                break;
            case 'linoFloor':
                $floorCost = $linoFloor;
                break;
            default:
                echo "Invalid selections have been made or left out.";
                exit;
        }
        $squareFootage = ceil($roomLength * $roomWidth);

        $totalCost = $squareFootage * $floorCost;
        $record = "$firstName:$lastName:$phoneNumber:$roomLength:$roomWidth:$floorType:$squareFootage:$totalCost\n";
        file_put_contents('estimates.txt', $record, FILE_APPEND | LOCK_EX);

        echo "<h2>Estimate Summary</h2>";
        echo "<p>First Name: $firstName</p>";
        echo "<p>Last Name: $lastName</p>";
        echo "<p>Phone Number: $phoneNumber</p>";
        echo "<p>Room Length: $roomLength</p>";
        echo "<p>Room Width: $roomWidth</p>";
        echo "<p>Floor Type: $floorType</p>";
        echo "<p>Square Footage: $squareFootage</p>";
        echo "<p>Total Cost: $" . number_format($totalCost, 2) . "</p>";
        echo "<p><a href='report.php'>View Report</a></p>";
        echo "<p><a href='index.html'>Start Over</a></p>";
    ?>
</body>
</html>