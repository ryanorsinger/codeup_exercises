<?php

// while this works, this exists a more pragmatic approach 
// $numbers = array(1,2,3,4,5);

// for ($i = 0; $i < count($numbers); $i++ ) {
// 	echo "\$numbers has an element with a value of {$numbers[$i]} \n";

// }

// SKELETON OF FOREACH SYNTAX
// foreach(array_expression as $value) {
	// statement
//}

$numbers = array(1,2,3,4,5,6,7,8,9,10);
foreach($numbers as $value) {
	$new_number = $value * 2;
	echo ("$value * 2 is {$new_number}\n");

	echo "\$number as {$value} \n";
}






?>