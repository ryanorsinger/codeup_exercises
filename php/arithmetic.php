<?php
//arithmetic.php

// fwrite(STDOUT, "Please input the first number." . PHP_EOL);
// Promp the user for two arguments, their two numbers.

fwrite(STDOUT, "Input your first number." . PHP_EOL);
$num1 = fgets(STDIN);

// Prompt the user for their second number
fwrite(STDOUT, "Input your second number." . PHP_EOL);
$num2 = fgets(STDIN);

// Use INTVAL to change the user input variables $num1 and $num2 to integers.
// Is there a more pragmatic, easier to read, or more commonly used method to do the same thing?

$a = intval ($num1);
$b = intval ($num2);

function add($a, $b) {
		if ((is_numeric($a)) && (is_numeric($b))) {
			echo $a + $b . PHP_EOL;
			} else { 
				echo "ERROR: Both arguments must be numbers!" . PHP_EOL;

		}
}


function subtract($a, $b) {
		if ((is_numeric($a)) && (is_numeric($b))) {
			echo $a - $b . PHP_EOL;
			} else { 
				echo "ERROR: Both arguments must be numbers!" . PHP_EOL;

		}
}


function multiply($a, $b) {
		if ((is_numeric($a)) && (is_numeric($b))) {
			echo $a * $b . PHP_EOL;
			} else { 
				echo "ERROR: Both arguments must be numbers!" . PHP_EOL;

		}
}


// function divide($a, $b) {
// 		if ((is_numeric($a)) && (is_numeric($b))) {
// 			//if ($a != 0 && $b != 0) is the same way of expressing what's below
// 			// Boolean Algebra
// 				// this is a nested if $b = 0 get checked only if the (is_numeric for $a and $b are true)
// 				if ($b = 0) {
// 					echo "You can't divide by zero. You have been exited from the program." . PHP_EOL;
// 					exit(0);
// 				}
//  			echo $a / $b . PHP_EOL;
// 		}
// }


// function modulus($a, $b) {
// 		if ((is_numeric($a)) && (is_numeric($b))) {
// 			echo $a % $b . PHP_EOL;
// 			} else { 
// 				echo "ERROR: Both arguments must be numbers. And you can't divide by zero" . PHP_EOL;

// 		}
// }


add($a, $b);
subtract($a, $b);
multiply($a, $b);
//divide($a, $b);
//modulus($a, $b);

?>