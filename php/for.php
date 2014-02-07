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

// Display all the numbers from the starting to ending number using a FOR loop

// Think about this like a While loop
// While ($starting_number = $starting_number) { run other code}
// 
echo "\n\n\n";

for ($i = $starting_number; $i <= $ending_number; $i++) {
	
	echo "$i\n";
}

echo "Done";
?>



