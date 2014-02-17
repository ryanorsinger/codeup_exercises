<?php

// Is there a more pragmatic way to express and state what I'm after in this exercise?

// Control Structures I
// Because computers are based on boolean logic,
// Setting conditionals that test for TRUE or FALSE
// Allow us to control the flow of our programs
// By determining the truthfulness of an assertion,
// we can make decisions about how our code should react during runtime.

// if (expression) {
	// then do this
//}

$a = 5;
$b = 10;
$c = '10';

if ($a == $b) {
	echo "$a is equal to $b" . PHP_EOL;
}

if ($a != $b) {
	echo "$a is not equal to $b" . PHP_EOL;
}

if ($a < $b) {
	echo "$a is less than $b" . PHP_EOL;
}

if ($b > $a) {
	echo "$b is greater than $a" . PHP_EOL;
}

if ($b >= $c) {
	echo "$b is greater than or equal to $c" . PHP_EOL;
}

if ($b <= $c) {
	echo "$b is less than or equal to $c" . PHP_EOL;
}

if ($b == $c) {
	echo "$b is equal to $c" . PHP_EOL;
}

if ($b === $c) {
	echo "$b is identical to $c" . PHP_EOL;
}

if ($b != $c) {
	echo "$b is not equal to $c" . PHP_EOL;
}

if ($b !== $c) {
	echo "$b is not identical to $c" . PHP_EOL;
}

?>