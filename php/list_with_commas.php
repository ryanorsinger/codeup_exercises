<?php


// here's the function
function humanized_list($input, $sort = false) {
	// pass the $array into the function.
	// pop the last item off the $array.
	$exploded = explode(', ', $input);
	
	if ($sort) {
		sort($exploded);
	}

	$last = array_pop($exploded);

	array_push($exploded, "and $last \n");
	return implode(', ', $exploded);
}


// list of famous peeps
$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

// Humanize that list
$famous_fake_physicists = humanized_list($physicists_string, true);

// Output sentence

echo "Some of the most famous theoretical physicists are {$famous_fake_physicists} \n";

?>
