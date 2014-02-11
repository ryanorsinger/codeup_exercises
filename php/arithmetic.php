<?php
//arithmetic

$a = 10;
$b = 2;

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

add($a, $b);
subtract($a, $b);
multiply($a, $b);
divide($a, $b);

// but notice that this doens't work quite as I intended
echo "\t and here are the values passed into the functions backwards" . PHP_EOL;
echo "\t But notice that this is not quite what I planned to have." . PHP_EOL;
echo  "\t That's because the functions (add, subtract, multiply, divide) right now have a set order of operations" . PHP_EOL;

add($b, $a);
subtract($b, $a);
multiply($b, $a);
divide($b, $a);


?>