<?php

echo "\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n";

// Welcome the user to the game
echo "\tWelcome to the HIGH - LOW game! \n";

// the game picks a random number between 1 and 100;
$number = rand(1, 100);

// prompt the user to guess the number
fwrite(STDOUT, "\tWhat is your first name? \n");

// Get the user's first name
$first_name = fgets(STDIN);

// Explain the game and prompt the user for their guess
fwrite(STDOUT, "\tOK! Let's play! Guess a number between 1 and 100. \n When you guess too low, the game will tell you to guess higher.\n When you guess too high, the game will tell you to guess lower\n");
fwrite(STDOUT, "\tNow guess a number! \n");


// since I want to count the number of attempts, I set count to 0.
$count = 0;

// OK, let's start the logic part of the game!
// I prompt the user for their guess.
// I'm going to do this with a do loop because I want the prompt for user guess to happen.
	do {
		
		//This count increment does the same thing as saying $count = $count + 1; to increase the count for each attempt.
		$count ++;

		// Get the user guess
		$user_guess = fgets(STDIN); 

			if ($user_guess < $number) { // Check if the guess is lower than the target number
			fwrite(STDOUT, "\t\tTOO LOW! GUESS HIGHER! \n");	
			}

			if ($user_guess > $number) {  // if user's guess is less than the numbe,r it outputs "HIGHER"
			fwrite(STDOUT, "\t\tTOO HIGH! GUESS LOWER\n"); 
			}

			if ($user_guess == $number) {
				echo "\t\t\tCongratulations, you've WON the HIGH-LOW game, $first_name";
				echo "\t\t\tIt took you $count attempts to guess the target number. \n \t\t\tGREAT JOB!! \n\n\n";
				exit(0);
			}
			
		} while($user_guess != $number);


?>