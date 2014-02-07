<?php

// Exercises for Control Structures II 1 of 5


// 1. Prompt the user for a starting number and an ending number.
// 	  then display all the numbers from the starting to the end using a FOR loop

// this fwrite prompts the user to input their starting number.
fwrite(STDOUT, "Input your starting number\n");

// This assigns the user's input to the $starting_number variable.
$starting_number = fgets(STDIN);

// This fwrite prompts the user to input their ending number.
fwrite(STDOUT, "Input your ending number\n");

// This assigns the user's input to the $ending_number variable.
$ending_number = fgets(STDIN);

// Display all the numbers from the starting to ending number using a FOR loop

for ($starting_number = $starting_number; $starting_number <= $ending_number; $starting_number += 1) {
	echo "$starting_number\n";
}

echo "Done";
?>



