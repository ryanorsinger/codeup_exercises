<?php

echo "\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n";

// Welcome the user to the game
echo "Welcome to the HIGH - LOW game! \n";

// the game picks a random number between 1 and 100;
$number = rand(1, 100);

// prompt the user to guess the number
fwrite(STDOUT, "What is your first name? \n");

// Get the user's first name
$first_name = fgets(STDIN);

// Explain the game and prompt the user for their guess
fwrite(STDOUT, "Ok, " . $first_name . "let's play! Guess a number between 1 and 100. \n When you guess too low, the game will tell you to guess higher.\n When you guess too high, the game will tell you to guess lower\n");
fwrite(STDOUT, "Now guess a number! \n");

// OK, let's start the logic part of the game!
// I prompt the user for their guess.
// I also want to make a variable called count and count the number of attempts it took the player to guess correctly
// declare the count.
$count = 0;

	do {
		$count ++;

		$user_guess = fgets(STDIN); 

			if ($user_guess < $number) { // Check if the guess is lower than the target number
			fwrite(STDOUT, "TOO LOW! GUESS HIGHER! \n");	
			}

			if ($user_guess > $number) {  // if user's guess is less than the numbe,r it outputs "HIGHER"
			fwrite(STDOUT, "TOO HIGH! GUESS LOWER\n"); 
			}

			if ($user_guess == $number) {
				echo "Congratulations, you've WON the HIGH-LOW game, $first_name";
				echo "It took you $count number of attempts to hit the target. \n GREAT JOB!! \n";
				exit(0);
			}
			
		} while ($userguess != $number);


?>


// if the user's guess is more than the number, it outputs "LOWER"

// if the user guesses the number, the game should declare "GOOD GUESS"


