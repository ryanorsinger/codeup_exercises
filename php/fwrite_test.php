<?php
// Write the prompt to the user


// Get the input from the user
// When we get the input from the user, they hit enter. And enter is the escape character \n.
// That means that the output from 
// "echo ("Would you like to play a game, " . $first_name . " ?\n"); "
// puts the question mark on a new line after the user's inputted name.

// Prompt the user for first name and then assign the input to the variable $first_name
fwrite(STDOUT, "What is your first name? \n");
$first_name = fgets(STDIN);

// Prompt the user for last name. Then assign their input to the variable $last_name
fwrite(STDOUT, "What is your last name? \n");
$last_name = fgets(STDIN)

// Output the user's first name
fwrite(STDOUT, "Hello " . $first_name);

echo "Welcome to CodeUp, " . $firstname;

//
echo ("Would you like to play a game, " . $first_name . " ?\n"); 


?>