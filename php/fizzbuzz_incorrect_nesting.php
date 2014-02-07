<?php

// why the heck don't we get 45 or 55 returned in the output for this?? WTH
//notice that in this exercise, the second if is nested inside the first. 

$number = 0;

do { 

	if ($number % 2 == 0) {
		
		echo "$number is even\n";
		if ($number % 5 == 0) {			
			echo "$number is divisable by five.\n";
		}
	}

	$number ++;

} while ($number <= 100);


?>