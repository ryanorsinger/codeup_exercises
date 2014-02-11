<?php

// let's say that I want to put . PHP_EOL; at the end of every line
// $sum = (20 + 22) . PHP_EOL; 
// $sum2 = (35 + 7). PHP_EOL;

// Right here I've created a function called "add".
// Now, every time I call "add" and give pass it two values
// it will do the add function echo ($num1 + $num2) . PHP_EOL;

function add($num1, $num2) {
	echo ($num1 + $num2) . PHP_EOL;
}

$first = 30;
$second = 40;

// FUNCTIONS give us the opportunity to give
// Functions give code a place to live
// Then I call the function whenever I need it, as much as I need it

add(1,2);
add($first, 3);
add(6, $second);

// echo $sum;
// echo $sum2;

// function add($a, $b) {
	
//}

?>