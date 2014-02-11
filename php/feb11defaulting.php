<?php
// lecture

// I set $num2 = 0 in the function arguments
// That means that $num2 will default to zero
// Unless or until I pass a second argument into the function.

// function add($num1, $num2 = 0 ) {
// 	echo ($num1 + $num2) . PHP_EOL;	
// }

// $num1 = 1;

// echo "\n This is add(1) so we pass the first argument and use the default on the second.\n";
// add(1);

// add(190, 3);

// In the above example, I added 1 and the default. 
// The default defaults to 0;
// If I don't pass a value into a function, it defaults to 




// below, we set the default argument for $newline in the function trim_with_new_line
// Our function trim_with_new_lines throws the arguments into an if/else loop 
// if 

function trim_with_new_line($item, $newline = TRUE) {
	if ($newline == TRUE) {
		echo trim($item) . PHP_EOL;
		} else { 
		echo trim($item) . PHP_EOL;
		}	
	}

trim_with_new_line('                             Ryan       ');


?>