<?php
//arithmetic

$a = 10;
$b = 2.23;

function add($a, $b) {
	echo $a + $b . PHP_EOL;
}

function subtract($a, $b) {
	echo $a - $b . PHP_EOL;
}

function multiply($a, $b) {
	echo $a * $b . PHP_EOL;
}

function divide($a, $b) {
	echo $a / $b . PHP_EOL;
}

function modulus($a, $b) {
	echo ($a%$b) . PHP_EOL;
}

add($a, $b);
subtract($a, $b);
multiply($a, $b);
divide($a, $b);

modulus($a, $b);

?>