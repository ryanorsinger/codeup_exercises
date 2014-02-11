<?php

// Write a program that prints the numbers from 1 to 100. 
// For multiples of 3, print "Fizz"
// For multiples of 5, print "Buzz"
// For numbers that are multiples of both 3 and 5, print "FizzBuzz"

for ($i = 1; $i <= 100; $i ++) {
	if ((($i % 3) == 0) && ($i % 5) == 0) {
		echo "FizzBuzz\n";

	} elseif (($i % 3) == 0) {
		echo "Fizz\n";
	} elseif (($i % 5) == 0) {
		echo "Buzz\n";
	} else {
		echo "$i\n";
	}
}






/*for ($i = 1; $i <= 100; $i ++) {

	if (($i % 3) == 0) {

		echo "Fizz\n";
	
	} elseif (($i % 5) == 0) {
			echo "Buzz\n";
		
	
	} elseif ((($i % 3) == 0) && (($i % 5) == 0)) {
		echo "FizzBuzz\n";
	
	} else {

		echo "$i\n";
		}

}*/




?>