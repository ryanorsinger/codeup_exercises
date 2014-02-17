<?php


$nothing = NULL;
$something = '';
$array = array(1,2,3);

$things = $array($nothing, $something, $array);

// Create a function that checks if a variable is set or empty, 
// and then display "$variable_name is SET|EMPTY"

foreach($things as $key => $value) {
	var_dump($key);
	var_dump($value);
	echo "\t\tNanny Nanny Boo Boo! \n";
	print_r ("$key is $value" . PHP_EOL);
}



// TEST: If var $nothing is set, display '$nothing is SET'

// TEST: If var $nothing is empty, display '$nothing is EMPTY'

// TEST: If var $something is set, display '$something is SET'

// Serialize the array $array, and output the results

// Unserialize the array $array, and output the results