<?php

// Set the default timezone
date_default_timezone_set('America/Chicago');

// Get Day of Week as number
// 1 (for Monday) through 7 (for Sunday)



// I ended up having to take it back to basics here 
// echo var_dump($day_of_week);

$bob = 1;

while ($bob == 1) {

	$day_of_week = rand(1,7);

	switch ($day_of_week) {
		case "1":
			echo "I don't care if Monday's blue \n";
			//break;
		case "2":
			echo "Tuesday's grey\n";
			//break;
		case "3":
			echo "Wednesday break my heart\n";
			//break;
		case "4":
			echo "Thursday never looking back\n";
			//break;
		case "5":
			echo "And It's Friday I'm in LOVE!\n";
			//break;
		case "6":
			echo "Saturdayyyyyyy, wait!\n";
			//break;
		case "7":
			echo "And Sunday always comes too late.\n";
			//break;

	} 
 }




// switch($day_of_week) {
//     case 1:
//         // Output Monday
//     case 2: 
//         // Output Tuesday
//     //etc