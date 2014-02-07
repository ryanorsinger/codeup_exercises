<?php

// Now that we fixed the nexting problem from fizzbuzz_incorrect_nesting
// We should see 15 and 25 and 35 and 45 and 55 and 65 because of the incorrect nesting
// But now I want to avoid getting the output
// "0 is even" and "0 is divisable by five"

$number = 1;

if ($number != 0) {
	do { 

		if ($number % 2 == 0) {
		
			echo "$number is even\n";
			}

		if ($number % 5 == 0) {			
			echo "$number is divisable by five.\n";
		}
	
	$number ++;
} while ($number <= 100); // moving this while from the lower bracket up to this bracket should fix the parse error

} 


?>