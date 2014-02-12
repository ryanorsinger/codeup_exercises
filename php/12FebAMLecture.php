<?php

$student = 'As expected, this gives a Fatal Error' . PHP_EOL;

function is_valid_name($name) {
	if (strlen($name) > 1) && strlen($name) <= 50) {
		return TRUE;
	} else {
		return FALSE;
	}
}

is_valid_name('Jason');

echo $name;

?>

