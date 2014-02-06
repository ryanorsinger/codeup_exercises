<?php

// Create a do-while loop that will count by 2's and will
// return the result $a * $a on each line 
// while $a is less than 1,000,000. 
// output should equal
// 2
// 4
// 16
// 256
// 65536
// first commit will be for this exercise

$a = 0;

do {
	echo "\$a is equal to {$a}\n";
	$a += 2;
} while ($a < 100);

?>