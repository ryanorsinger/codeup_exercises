<?php

// Prompt the user for their first number
fwrite(STDOUT, "Input your first number." . PHP_EOL);
$num1 = intval(fgets(STDIN)));

// Prompt the user for their second number
fwrite(STDOUT, "Input your second number." . PHP_EOL);
$num2 = (intval(fgets(STDIN)));

$a = $num1;
$b = $num2;

function validate($a, $b) {

	if (!($a || $b)) {
		echo "Parameters must both be numeric\n";
		var_dump($a);
		var_dump($b);
		//	exit(0) is the old way to get out of everything. 
		// returning a value from the function is much more useful than just exiting!
		return false;
		} else { return true;
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