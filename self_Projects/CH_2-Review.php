<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ch_2-Practice</title>
    <!--        <link href="css/style.css" rel="stylesheet"> -->
    <style>
        .content {
            max-width: fit-content;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>

<body>
    <div class="content" style="margin-top:30px">
        <h1>Review Answers</h1>
        <table style="width:10%"
            <?php

            $answerFile = fopen("Ch_2-Practice.txt", "r");
            $answerNumber = 1;
            print("<tr>\n");
            while (!feof($answerFile)) {
                $answer = trim(fgets($answerFile), "1234567890. \n");
                if ($answer != "") {
                    print("<tr>\n<th>$answerNumber.</th>\n<td>  " . $answer . "</td>\n</tr>\n");
                    $answerNumber += 1;
                }
            }
            print("</tr>\n");
            fclose($answerFile);
            ?>
            </table>
    </div>
</body>

</html>
