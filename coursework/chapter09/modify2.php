<!DOCTYPE html>
<!--Author:
	Date:
	File:	modify2.php
	Purpose:Chapter 9 Exercise

		modify2.html does not need to be changed. Change modify2.php
		so instead of converting temperatures, it converts currency
		between US dollars and Canadian Dollars starting with 100
		dollars and ending with 500 dollars in 50 dollar increments.
		To convert each US Dollar amount to Canadian, multiply by 1.25
		Change the column headings to US Currency and Canadian Currency.
		HINT: run the program first, look at the code, and understand
		how it works before you make any changes.
		The loop currently counts from 1 to 20.
		Each time through the loop a us temperature is converted
		to cannadian and the us temperature and cannadian
		temperature are then displayed as  table row.
		So how would you change this to convert a US Dollar amount into
		Canadian each time through the loop, starting with 100, ending
		with 500, and incrementing by 50 each time?

-->

<html>

<head>
    <title>Modify2</title>
    <link rel="stylesheet" type="text/css" href="sample.css">
</head>

<body>

    <h1>Modify2</h1>

    <?php
    print("<table>");
    print("<tr><td><strong>Currency US</strong></td>
				<td><strong>Currency Canadian</strong></td></tr>");

    for ($us = 100; $us <= 500; $us = $us + 50) {
        $cannadian = $us * 1.25;
        print("<tr><td class = \"center\">$us</td>
				<td class = \"center\">$cannadian</td></tr>");
    }

    print("</table>");
    ?>

</body>

</html>
