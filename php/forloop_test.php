<?php

// FOR LOOPS
// FOR loops take 3 arguments and operate based on a condition 
// This is much like IF statements and WHILE loops.

// for (initializer; condition; incrementer)

//	for (expr1; expr2; expr3) { other code else }
//	for (initializer; condition; incrementer) { other code }
//	The first expression is executed the first time the FOR loop is encountered
//	The second expression is the conditional that determines if the code block is run
//  If the result of the condition (the 2nd expression) is TRUE
//	Then the code inside the curly braces { other code } is executed.
//	The last expression is executed after each pass of the loop.

	for ($i = 0; $i <= 10; $i ++) { 
		echo "happiness increased by $i\n"; 
	}

// for (initializer; condition; incrementer) {other code}
// set the variable $a to 1, while $a is <= 5
// output its value on a new line.
// and then increase its value by one each time it loops
	
	for ($a = 1; $a <=5; $a++) {
		echo "\$a has a value of {$a}\n";
	}

// for (initializer; condition; incrementer) {other code}


