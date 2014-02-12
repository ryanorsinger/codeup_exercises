<?php

// Update the code to allow upper and lowercase inputs from user for all menu items. Test adding, removing, and quiting.
// Update the program to start numbering the list with 1 instead of 0. Make sure remove still works as expected.

// Create array to hold list of todo items
$items = array();

// The loop!
do {
    /// Iterate through list items
    foreach ($items as $key => $item) {
        // Display each item and a newline
        //var_dump($key);
            $key2 = $key + 1;
            echo "[" . $key2 . "] {$item}\n";
            //var_dump($key);
        }
    }

    // Show the menu options
    echo '(N)ew item, (R)emove item, (Q)uit : ';

    // Get the input from user
    // Use trim() to remove whitespace and newlines

    // We need to make the user input portion user-proof
    // A pragmatic way to do this is to set the $input 
    
    // Use the command strtoupper. This capitalizes all characters
    // Rather than checking the lower cased-ness or capitalization of each entry
    // strtouppour(makes it all upper case)

    $input = (strtoupper(trim(fgets(STDIN))));


    // Check for actionable input
        // STRTOUPPER capitalalized the string of
        // user input in $input.

    if ($input == 'N') {
        // Ask for entry
        echo 'Enter item: ';
        // Add entry to list array
        $items[] = trim(fgets(STDIN));
    } elseif ($input == 'R') {
        // Remove which item?
        echo 'Enter item number to remove: ';
        // Get array key
        $key = trim(fgets(STDIN));
        // Remove from array
        unset($items[$key]);
    } /while ($input != 'Q');

// Exit when input is (Q)uit or (q)uit
//  } while (($input != 'Q') && ($input != 'q'));
//      is equal to
//  } while ((!($foo || $bar)));
// but since this version capitalizes all user $input




// Say Goodbye!
echo "Goodbye!\n";

// Exit with 0 errors
exit(0);

?>