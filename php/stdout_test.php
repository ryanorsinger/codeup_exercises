<?php
// Write the prompt to the user

fwrite(STDOUT, "What is your first name? \n");

// Get the input from the user
$first_name = fgets(STDIN);
// When we get the input from the user, they hit enter. And enter is the escape character \n.
// That means that the output from 
// "echo ("Would you like to play a game, " . $first_name . " ?\n"); "
// puts the question mark on a new line after the user's inputted name.

// Output the user's name
fwrite(STDOUT, "Hello " . $first_name);

echo "Welcome to CodeUp, " . $firstname;

//
echo ("Would you like to play a game, " . $first_name . " ?\n"); 


?>