<html>
<head>
	<title>Receipt</title>
</head>
<body style='background-image: url("shop.jpg");
  background-repeat: no-repeat;
  background-size: cover;'>
<h1 style="font-family:Lucida Handwriting;color:white">Thank you for shopping with us!</h1>
<?php echo '<h2 style="font-family:Lucida Handwriting;color:white">Your password is: ' .$_POST["Password"]. '</h2>'; ?>
<table style="color: brown; font-family:Segoe Script; border:1px solid black; border-collapse:collapse">
<tr>
<th style='background-color: burlywood; border:1px solid black; border-collapse:collapse'>Item</th>
<th style='background-color: burlywood; border:1px solid black; border-collapse:collapse'>Quantity</th>
<th style='background-color: burlywood; border:1px solid black; border-collapse:collapse'>Cost Per Item</th>
<th style='background-color: burlywood; border:1px solid black; border-collapse:collapse'>Sub-Total</th>
</tr>
<?php 
	

	$q1 = intval($_POST["Longsword"]); 
	$q2 = intval($_POST["SturdyArmor"]);
	$q3 = intval($_POST["OminousPotion"]);
	$ship = 0; 
	$method = $_POST["shipping"]; 

	if ($method == "Overnight") {
		$ship = 50;
	} else if ($method == "Three Day") {
		$ship = 5;
	}

	$cost1 = 5;
	$cost2 = 7;
	$cost3 = 30;

	$finalcost = ($cost1*$q1)+($cost2*$q2)+($cost3*$q3)+$ship;

	echo "<tr><td style='font-family:Segoe Script; background-color: burlywood; border:1px solid black; border-collapse:collapse'>Longsword</td><td style='border:1px solid black; border-collapse:collapse; background-color:antiquewhite; '>" .$q1. "</td><td style=background-color:antiquewhite; 'border:1px solid black; border-collapse:collapse'>$5.00</td><td style='border:1px solid black; border-collapse:collapse; background-color:antiquewhite;'>$" .$cost1*$q1. "</td></tr>";
	echo "<tr><td style='font-family:Segoe Script; background-color: burlywood; border:1px solid black; border-collapse:collapse'>Sturdy Armor</td><td style='border:1px solid black; border-collapse:collapse; background-color:antiquewhite;'>" .$q2. "</td><td style='background-color:antiquewhite; border:1px solid black; border-collapse:collapse'>$7.00</td><td style='border:1px solid black; border-collapse:collapse; background-color:antiquewhite;'>$" .$cost2*$q2. "</td></tr>";
	echo "<tr><td style='font-family:Segoe Script; background-color: burlywood; border:1px solid black; border-collapse:collapse'>Ominous Potion</td><td style='border:1px solid black; border-collapse:collapse; background-color:antiquewhite;'>" .$q3. "</td><td style='background-color:antiquewhite;'>$30.00</td><td style='border:1px solid black; border-collapse:collapse; background-color:antiquewhite;'>$" .$cost3*$q3. "</td></tr>";
	echo "<tr><td style='font-family:Segoe Script; background-color: burlywood; border:1px solid black; border-collapse:collapse'>Shipping</td><td style='background-color:antiquewhite; border:1px solid black; border-collapse:collapse' colspan='2'>" .$method. "</div></td><td style='background-color:antiquewhite; border:1px solid black; border-collapse:collapse'>$" .$ship. "</td></tr>";
	echo "<tr><td style='font-family:Segoe Script; background-color: burlywood; border:1px solid black; border-collapse:collapse' colspan='3'>Total Cost</td><td style='background-color: burlywood; border:1px solid black; border-collapse:collapse'>$" .$finalcost. "</td></tr>";


?>
</table>
</body>
</html>