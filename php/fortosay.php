<?php

//Prompt user for a starting number and ending number, 
//then display all the numbers from the starting to ending using a for loop.

// Prompt the user for their starting number
fwrite(STDOUT, "Input your starting number.\n"); 
// set $starting_number eqaul to user's input and set the variable as an integer of the input.
$starting_number = intval(fgets(STDIN));

// Prompt the user for their ending number
fwrite(STDOUT, "Input your starting number.\n");
// set $ending_number equal to the user's input and set the variable as an integer of that input
$ending_number = intval(fgets(STDIN));

for ($i = $starting_number; $i <= $ending_number; $i = $i + $starting_number) {
	echo "$i\n";
}

?>