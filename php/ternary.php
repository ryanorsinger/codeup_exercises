<?php


$foo = 0;
$bar = 1;

function validate($a, $b) {

	// if ($a and $b are not numeric, display error, return )

	if (!is_numeric($a) || !is_numeric($b)) {
		echo "Both arguments must be numbers\n";		
		return FALSE;
	} else {
		return TRUE;
		}
}

validate($foo, $bar);



?>