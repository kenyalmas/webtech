<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $file = 'estimates.txt';
        if (file_exists($file)) {
            $estimates = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            if ($estimates) {
                echo "<h2>Estimates Report</h2>";
                echo "<table border='1'>";
                echo "<tr><th>First Name</th><th>Last Name</th><th>Phone Number</th><th>Room Length</th><th>Room Width</th><th>Floor Type</th><th>Square Footage</th><th>Total Cost</th></tr>";
                foreach ($estimates as $estimate) {
                    list($firstName, $lastName, $phoneNumber, $roomLength, $roomWidth, $floorType, $squareFootage, $totalCost) = explode(':', $estimate);
                    echo "<tr>";
                    echo "<td>$firstName</td>";
                    echo "<td>$lastName</td>";
                    echo "<td>$phoneNumber</td>";
                    echo "<td>$roomLength</td>";
                    echo "<td>$roomWidth</td>";
                    echo "<td>$floorType</td>";
                    echo "<td>$squareFootage</td>";
                    echo "<td>$" . number_format($totalCost, 2) . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "No estimates found.";
            }
        } else {
            echo "Estimates file does not exist.";
        }
    
        echo "<p><a href='index.html'>Back to home</a></p>";

    ?>
</body>
</html>