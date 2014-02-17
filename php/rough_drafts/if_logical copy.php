<?php

// IS THERE A MORE PRAGMATIC WAY TO EXPRESS, STATE, AND EVALUATE THIS?

$x = 0;
$y = 5;
$z = 10;

// if $x < $y < $z then echo "{$x} < {$y} < {$z}\n";

if (($x < $y) && ($y < $z)) {
	echo "{$x} < {$y} < {$z}" . PHP_EOL;
}

// if $x is greater than 0 OR less than 10, echo the result as a sentence "$x is greater than 0 OR less than 10".
// repeat the if statement for $y and $z.  

if (($x > 0) || ($x < 10)) {
	echo "\$x at $x is greater than 0 OR less than 10" . PHP_EOL;
}

if (($y > 0) || ($y < 10)) {
	echo "\$y at $y is greater than 0 OR less than 10" . PHP_EOL;
}

if (($z > 0) || ($z < 10)) {
	echo "\$z at $z is greater than 0 OR less than 10" . PHP_EOL;
}

// If $x is greater than 0 AND less than 10, echo the result as a sentence "$x is greater than 0 AND less than 10".
// know that FALSE and TRUE === FALSE
if (($x > 0) && ($x < 10)) {
	echo "\$x as $x is greater than 0 AND less than 10" . PHP_EOL;
}

//  TRUE && FALSE === FALSE
if (($y > 0) && ($y < 10)) {
	echo "\$y as $y is greater than 0 AND less than 10" . PHP_EOL;
}

// TRUE && FALSE === FALSE
if (($z > 0) && ($z < 10)) {
	echo "\$z is $y greater than 0 AND less than 10" . PHP_EOL;
}

?>

