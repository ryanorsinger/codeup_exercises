<?php

$i = 99;
while ($i >= 0) {
	$j = $i - 1;
	echo "$i bottles of beer on the wall. $i bottles of beer!\n";
	echo "We take one down and pass it around, $j bottles of beer on the wall!" . PHP_EOL;
	$i -= 1;
	
	if ($i == 2) {
		echo "$i bottles of beer on the wall. $i bottles of beer!\n";
		echo "We take one down and we pass it around, 1 last bottle of beer on the wall!\n";
		$i -= 1;
	} else if ($i == 1) {
		echo "$i bottle of beer on the wall. $i bottle of beer.\n";
		echo "We take one down and we pass it around, no more bottles of beer on the wall\n";
		$i -= 1;
	} else if ($i == 0) {
		echo "No more bottles of beer on the wall, no more bottles of beer. Go to the store and buy some more, 99 bottles of beer on the wall." . PHP_EOL;
		break;
	}
	
}


// <!-- Output:

// The lyrics of the entire "99 Bottle of Beer" song | Click here for reference

// "99 bottles of beer on the wall, 99 bottles of beer. Take one down and pass it around, 98 bottles of beer on the wall."

// "98 bottles of beer on the wall, 98 bottles of beer. Take one down and pass it around, 97 bottles of beer on the wall."

// ...

// "2 bottles of beer on the wall, 2 bottles of beer. Take one down and pass it around, 1 bottle of beer on the wall."

// "1 bottle of beer on the wall, 1 bottle of beer. Take one down and pass it around, no more bottles of beer on the wall."

// "No more bottles of beer on the wall, no more bottles of beer. Go to the store and buy some more, 99 bottles of beer on the wall." -->


?>

