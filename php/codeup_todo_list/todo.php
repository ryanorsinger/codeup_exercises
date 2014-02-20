<?php

// Create array to hold list of todo items
$items = array();

// Iterate through list items
function list_items($items) {
    foreach ($items as $key => $item) {
        // Display each item and key +1
        $j = $key + 1;
        echo "[{$j}] {$item}\n";
    }
}


function get_input($upper = FALSE) {
    if($upper == TRUE) {
        $upper = trim(fgets(STDIN)); 
        return strtoupper($upper);
    } else {
        $upper = trim(fgets(STDIN));
        return $upper;
    }
}

function sort_menu($items) {
    echo "Would you like to sort your todo list items (A)-Z, (Z)-A, (O)rder entered, (R)everse order entered\n";
    $order = get_input(TRUE);

    switch($order) {
        case 'A':
            asort($items);
            break;
        case 'Z':
            arsort($items);
            break;
        case 'O':
            ksort($items);
            break;
        case 'R':
            krsort($items);
            break;
    }
    return $items;
}


// The loop!
do {
    // Echo the list produced by the function
    echo list_items($items);

    // Show the menu options
    echo '(N)ew item, remove (F)irst item, remove (L)ast item, (R)emove item, (SO)rt, (Q)uit : ';
    // Get the input from the
    $input = get_input(TRUE);

switch ($input) {
    // Check for actionable input
    case 'N': 
        // Ask for entry
        echo 'Enter item: ';
        // Add entry to list array
        $item_input = get_input();

        echo "Add to (B)eginning or (E)nd of list?";
        $order = get_input(TRUE);

        if ($order == 'B') {
            array_unshift($items, $item_input);
        } else {
            $items[] = $item_input;
        }
        break;

    case 'R':
        // Remove which item?
        echo 'Enter item number to remove: ';
        // Get array key
        $key = trim(fgets(STDIN));
        // Remove from array
        unset($items[$key]);
        break;
    
    case 'F':
        // remove the first item from the list
        array_shift($items);
        break;
    
    case 'L':
        // remove the last item from the list
        array_pop($items);
        break;

    case 'SO':
        // When sort menu is opened, show the following options "(A)-Z, (Z)-A, (O)rder entered, (R)everse order entered".
        $items = sort_menu($items);
        break;
    }


// Exit when input is (Q)uit
} while ($input != 'Q');

// Say Goodbye!
echo "Goodbye!\n";

// Exit with 0 errors
exit(0);

?>