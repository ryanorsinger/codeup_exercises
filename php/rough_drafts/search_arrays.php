<?php

// Create a function to compare 2 arrays that returns the number of values in common between the arrays. 
// Use the 2 example arrays and make sure your solution uses array_search().

// so another way to say it (to the rubber ducky)

// I need to create a function that takes a needle in a haystack

// I want you to give me a group of needles and a group of haystacks.
// 

function count_matches($needles, $haystack)
{
	$number_of_matches = 0;
	foreach($needles as $needle) {
		//
		$result = array_search($needle, $haystack);
		
		if(is_numeric($result)) {
			// We want to checkif the $result of array_search is numeric
			// That way, we know that the count we're using ($number_of_matches) is numeric
			// and we know what type we will be returning from this function.
			// And the better we know what types go into functions
			// The more explicitly and intuitively I know what types of returns a function() returns
			// The better I can call functions and know what type of return I will get
			// And how to work with the output of the function since I know what the return type will be.
			$number_of_matches++;	
		}
	}
	return $number_of_matches;
	// we return an integer
}


$names = ['Tina', 'Dana', 'Mike', "Amy", "Adam"];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

echo count_matches($compare, $names);

?>