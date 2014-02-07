<?php
// There is probably a more efficient way or a single control character that will clear the screen. 
echo "\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n";

	// Check if we have the right number of arguments
	if ($argc != 3) {
	echo "Please use only two numeric arguments after filename.\n"; // Show the error
	exit(0);														// Exit
	}

	if (!is_numeric($argv[1]) || (!is_numeric($argv[2]))) {
		echo "You have the right amount of arguments, but they both need to be numeric! \n"; // give an error
		exit(0);																			 // exit
	}
	
// create min and max variables and set them to be integers of the arguments
// this is because PHP passes or casts arguments from the command line as strings by default!!!
$min = intval($argv[1]);
$max = intval($argv[2]);	

// Welcome the user to the game
echo "\tWelcome to the HIGH - LOW game! \n";

// the game picks a random number between 1 and 100;
$number = mt_rand($min, $max);

// prompt the user to guess the number
fwrite(STDOUT, "\tWhat is your first name? \n");

// Get the user's first name
$first_name = fgets(STDIN);

// Explain the game and prompt the user for their guess
fwrite(STDOUT, "\tOK! Let's play! Guess a number between $min and $max. \n When you guess too low, the game will tell you to guess higher.\n When you guess too high, the game will tell you to guess lower\n");
fwrite(STDOUT, "\tNow guess a number! \n");


// since I want to count the number of attempts, I set count to 0.
$count = 0;

// OK, let's start the logic part of the game!
// I prompt the user for their guess.
// I'm going to do this with a do loop because I want the prompt for user guess to happen.
	do {
		
		$count ++;

		// Get the user guess
		$user_guess = fgets(STDIN); 

		// Make sure that the user actually inputs an integer.
		
			
			// Check if the guess is lower than the target number and provide a hint.
			if ($user_guess < $number) { 
			fwrite(STDOUT, "\t\tTOO LOW! GUESS HIGHER! \n");	
			}  

			// if user's guess is less than the numbe,r it outputs "HIGHER"
			if ($user_guess > $number) {  
			fwrite(STDOUT, "\t\tTOO HIGH! GUESS LOWER\n"); 
			}
			
		} while($user_guess != $number);

	echo "\t\t\tCongratulations, you've WON the HIGH-LOW game, $first_name";
	echo "\t\t\tIt took you $count attempts to guess the target number. \n \t\t\tGREAT JOB!! \n\n\n";
	exit(0);

?>