<?php

// Exercises for Control Structures II 1 of 5


// 1. Prompt the user for a starting number and an ending number.
// 	  then display all the numbers from the starting to the end using a FOR loop

// this fwrite prompts the user to input their starting number.
fwrite(STDOUT, "Input your starting number\n");

// This assigns the user's input to the $starting_number variable.
$starting_number = intval(fgets(STDIN));

// This fwrite prompts the user to input their ending number.
fwrite(STDOUT, "Input your ending number\n");

// This assigns the user's input to the $ending_number variable.
$ending_number = intval(fgets(STDIN));

// Prompt the user to supply their own incrementer (count by 1 or 2 or 4 or 5)
fwrite(STDOUT, "Input the number you want to increment by\n");

// This assigns the user's input to the $user_incrementer 
$user_incrementer = intval(fgets(STDIN));

// if the user incrementer is not entered, then default the incrementer to 1.
	if (isset($user_incrementer) == FALSE) {
	$user_incrementer = 1;
	}

// Display all the numbers from the starting to ending number using a FOR loop

// Think about this like a While loop
// While ($starting_number = $starting_number) { run other code}
// 
echo "\n\n\n";

for ($i = $starting_number; $i <= $ending_number; $i = $i + $user_incrementer) {
	
	echo "$i\n";
}

echo "Done";
?>



