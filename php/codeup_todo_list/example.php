<?php

$list = ['Item 1', 'Item 2', 'Item 3'];

// we're iterating through an array.
// List the array items formatted for CLI 

function list_items($items) {
	$return = '';
	foreach ($items as $key => $value) {
		$string .= $value . PHP_EOL;
	}
	return $string;
}


?>