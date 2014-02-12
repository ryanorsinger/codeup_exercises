<?php

function get_input($upper = false) {
	$input = trim(fgets(STDIN));
	return $upper ? strtoupper($input) : $input;
}


$list = array('Take out the trash', 'Mow the yard', 'Ask Brandon to get groceries');




function list_items($list) {
	$result = '';

	//loop through the list
	foreach ($list as $key => $value) {
		$newindex = $key + 1;
		$result .= "[{$newindex}]  {$value}";
	}
	return $result;
}


// The loop!
do {
     // Echo the list produced by the function
    echo list_items($items);


    // Show the menu options
    echo '(N)ew item, (R)emove item, (Q)uit : ';
    // Get the input from user

    // Use trim() to remove whitespace and newlines
    $input = get_input(TRUE);

    // Check for actionable input
    if ($input == 'N') {
        // Ask for entry
        echo 'Enter item: ';
        // Add entry to list array
        $items[] = get_input();

    } elseif ($input == 'R') {
        // Remove which item?
        echo 'Enter item number to remove: ';
        // Get array key
        $key = get_input();
        // Remove from array
        unset($items[$key]);
    }
// Exit when input is (Q)uit
} while ($input != 'Q');

// Say Goodbye!
echo "Goodbye!\n";

// Exit with 0 errors
exit(0);
