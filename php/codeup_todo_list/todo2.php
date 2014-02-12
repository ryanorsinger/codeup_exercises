<?php

// Create array to hold list of todo items
// foreach only works on arrays and objects.
// there are only two syntaxes:
// foreach (array_expression as $value) { statement }

$items = array();

// List array items formatted for CLI

function list_items($items) {  
    $string = '';
    foreach ($items as $key => $value) {
        $newkey = $key + 1;
        $string = $string . $newkey . "\t" . $value . PHP_EOL;
    }
    return $string;
}
   // Return string of list items separated by newlines.
    // Should be listed [KEY] Value like this:
    // [1] TODO item 1
    // [2] TODO item 2 - blah
    // DO NOT USE ECHO, USE RETURN


// Get STDIN, strip whitespace and newlines, 
// and convert to uppercase if $upper is true
                   // the argument is defaulted to FALSE

function get_input($upper = false) { 
    $input = trim(fgets(STDIN));
    return $input ? strtoupper($input) : $input;
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