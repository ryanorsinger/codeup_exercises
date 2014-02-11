<?php

// declare the add function with built in is_numeric checking

function add($a, $b) {
	if (is_numeric($a)) && is_numeric($b)) {
		return $a + $b;
	} else { 
		return NULL;
	}
}

$sum = add(2,3);
echo "the sum of 2 and 3 is {$sum};"

