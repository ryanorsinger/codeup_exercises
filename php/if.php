<?php

$a = 5;
$b = 10;
$c = '10';

if ($a < $b) {
	// output the appropriate result
	echo "$a is less than $b\n";
}

if ($b > $a) {
	// output the appropriate result
	echo "$b is greater than $a\n";
}

if ($b >= $c) {
	//output the appropriate result
	echo "$b is more than or equal to $c\n";
}

if ($b <= $c) {
	// output the appropriate result
	echo "$b is less than or equal to $c\n";
}

if ($b == $c) {
	// output the appropriate result
	echo "$b is equal but not the same data type as " . "\$c ";
}

if ($b === $c) {
	// output the appropriate result
	echo "$b is identical $c\n";
}

if ($b !== $c) {
	// output the appropriate result
	echo "$b is not identical to $c\n";
}

?>
