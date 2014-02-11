<?php

// let's say that I want to put . PHP_EOL; at the end of every line
// $sum = (20 + 22) . PHP_EOL; 
// $sum2 = (35 + 7). PHP_EOL;

$num1 = $argv[1];
$num2 = $argv[2];

function add($num1, $num2) {
	echo ($num1 + $num2) . PHP_EOL;
}

add($num1,$num2);

// echo $sum;
// echo $sum2;

// function add($a, $b) {
	
//}

?>