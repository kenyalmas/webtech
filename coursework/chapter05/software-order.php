<!DOCTYPE html>
<!--Author: Kenneth Almas
	Date:   02/16/2025
	File:	software-order.php
	Purpose:Chapter 5 Exercise

-->


<html>
<head>
	<title>SaveTheWorld Software</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>

	<h1>Your Order</h1>

	<?php
        $os = $_POST['os'];
	$numCopies = $_POST['numCopies'];

	$subtotal = $numCopies * 35.00;
	$tax = $subtotal * 0.07;
	$shipHandle = numberCopies * 1.25;
	$total = $subtotal + $tax + $shipHandle;

	print('<p>You ordered ' . $numCopies . ' copies for the ' . $os . ' operating system.<br>' .
	'The subtotal is $' . $subtotal . '. <br>' .
	'The tax will be $' . $tax . '.<br>' .
	'The shipping cost will be $' . $shipHandle . '.<br>' .
	'Bringing the total cost to $' . $total . '.</p>')
	?>

</body>
</html>
