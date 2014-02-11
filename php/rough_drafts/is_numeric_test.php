<?php

$number = 10;
$string = "bobo and jojo are my favorite team of bawdy little monkeys";
$boolean = FALSE;

	if (is_numeric($number) === TRUE) {
		echo "$number is numeric\n";
	} 

	if (is_numeric($string) === FALSE) {
		echo "$string is not numeric\n";
	}

	if (is_numeric($boolean) === FALSE) {
		echo "\$boolean is not numeric\n";
	}

?>