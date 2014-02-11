<?php

// I want to use the parameters_are_valid function to return TRUE or FALSE

function parameters_are_valid($a, $b) {
// if either $a or $b are not numeric, then I want to run my error checker
// If at least one of my variables is not numeric

	//if (!is_numeric($a) && !is_numeric($b)) {
	// if either one of $a or $b is not numberic = TRUE
	// then do what's in the curly brackets to kick my error message
	if (!($a || $b)) {
		echo "Parameters must both be numeric\n";
		var_dump($a);
		var_dump($b);
		//	exit(0) is the old way to get out of everything. 
		// returning a value from the function is much more useful than just exiting!
		return false;
	} 
}


function add($a + $b) {
	if (parameters_are_valid($a + $b)) {	
		return $a + $b;
	} else {
		return 0;
	}
}

function subtract($a - $b) {
	validate ($a - $b);
	return $a - $b;
}

echo add(3,2) . PHP_EOL;
echo subtract($a - $b) . PHP_EOL;