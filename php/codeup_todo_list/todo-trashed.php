<?php

// Create array to hold list of todo items
$filename = '/Users/Moravia/vagrant-lamp/exercises/data/todo.txt';
$items = open_file($filename);

//open file, read contents to string
// then explode the string to an array using \n as a delimeter 

// Iterate through list items
function list_items($items) {
    foreach ($items as $key => $item) {
        // Display each item and key +1
        $j = $key + 1;
        echo "[{$j}] {$item}\n";
    } 
}

function open_file($filename) {
    $handle = fopen($filename, "r");
    $contents = fread($handle, filesize($filename));
    $contents_array = explode("\n", $contents);
    fclose($handle);
    return $contents_array;
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
    
    //open_file($filename);
    //list_items($items);
    echo "\n\n";


    // Show the menu options
    echo '(N)ew item, (S)ave, remove (F)irst item, remove (L)ast item, (R)emove item, (SO)rt, (Q)uit : ';
    // Get the input from the
    $input = get_input(TRUE);

switch ($input) {
    // Check for actionable input
    case 'N': 
        // Ask for entry
        echo 'Enter item: ';
        // Add entry to list array
        $new_todos = get_input();
        
        $old = list_items($items);

        //$new = list_items($new_todos);

        print_r($old, $new);

        echo "\n\n\n";
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
    // case 'O':
    //     // open the file and return the results
    //     // open_file();
    //     open_file($filename);
    //     break;
 
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