<?php
//arithmetic.php

// fwrite(STDOUT, "Please input the first number." . PHP_EOL);

// Promp the user for two arguments, their two numbers.

fwrite(STDOUT, "Input your first number." . PHP_EOL);
$num1 = fgets (STDIN);

// Prompt the user for their second number
fwrite(STDOUT, "Input your second number." . PHP_EOL);
$num2 = fgets (STDIN);

$a = $num1;
$b = $num2;

function add($a, $b) {
		if ((is_numeric($a)) && (is_numeric($b))) {
			echo $a + $b . PHP_EOL;
			} else { 
				echo "ERROR: Both arguments must be numbers!" . "PHP_EOL";

		}
}


function subtract($a, $b) {
		if ((is_numeric($a)) && (is_numeric($b))) {
			echo $a - $b . PHP_EOL;
			} else { 
				echo "ERROR: Both arguments must be numbers!" . "PHP_EOL";

		}
}


function multiply($a, $b) {
		if ((is_numeric($a)) && (is_numeric($b))) {
			echo $a * $b . PHP_EOL;
			} else { 
				echo "ERROR: Both arguments must be numbers!" . "PHP_EOL";

		}
}


function divide($a, $b) {
		if ((is_numeric($a)) && (is_numeric($b))) {
			echo $a / $b . PHP_EOL;
			} else { 
				echo "ERROR: Both arguments must be numbers!" . "PHP_EOL";

		}
}


function modulus($a, $b) {
		if ((is_numeric($a)) && (is_numeric($b))) {
			echo $a % $b . PHP_EOL;
			} else { 
				echo "ERROR: Both arguments must be numbers!" . "PHP_EOL";

		}
}


add($a, $b);
subtract($a, $b);
multiply($a, $b);
divide($a, $b);
modulus($a, $b);

?>