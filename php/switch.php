<?php

// set the default timezone

$value = 123983983793873987;

switch(gettype($value)) {
	case 'string':
		echo '$value is a string' . PHP_EOL . PHP_EOL . PHP_EOL;
		break;
	default:
		echo '$value is not a string' . PHP_EOL . PHP_EOL. PHP_EOL . PHP_EOL;
		break;		

}

?>
