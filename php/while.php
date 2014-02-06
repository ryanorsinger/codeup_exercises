<?php

$test = 1;
$targetnum = 23;
// while $test <= 15, increment $test by 1 inside the loop. 
// Before incrementing $test, output each iteration (echo $test with newline)

while ($test <= $targetnum) {
	echo "\$test is equal to {$test} before incrementing and is not yet <= to \$targetnum which is $targetnum\n";
	$test++;
} 
 	echo "\t\nDone!\n \$test is now less than or equal to \$targetnum\n";
 	echo "\t\t$test is now less than or equal to $targetnum\n\n";
 	echo "\t\t\t the above sentence looks weird to say that $test is less than or equal to $targetnum\n";
 	echo "\t\t\t and the important thing to recognize is that \$test increments after the while logic is tested\n\n\n";

 	?>
