<?php

// Create array to hold list of "to do" items as elements

$items = array();

//set function to write to $filename
// function can_write_file($content) {

//         // Let's make sure the file exists and is writable first.
//     if (is_writable($filename)) {

//         // In our example we're opening $filename in append mode.
//         // The file pointer is at the bottom of the file hence
//         // that's where $somecontent will go when we fwrite() it.
//         if (!$handle = fopen($filename, 'a')) {
//              return "Cannot open file ($filename)";
//              exit;
//         }

//         // Write $somecontent to our opened file.
//         if (fwrite($handle, $somecontent) === FALSE) {
//             echo "Cannot write to file ($filename)";
//             exit;
//         }

//         echo "Success, wrote ($somecontent) to file ($filename)";

//         fclose($handle);

//     } else {
//         echo "The file $filename is not writable";
//         }

// }
// List array items formatted for CLI
// Iterate through list items


// FOUR LINES OF ACTIONBLE CODE PRODUCE 

// Ok, rubber ducky:
//  Your job is to go to each element ouf of the $assignment array
// your job is to initialize a '' blank string variable.
// each time you grab an $assignment from the array (one of the array $key => $values)
// make a list that concatenates 

function list_items($assignment) {

    $list = '';
 
    foreach ($assignment as $key => $value) {

       $list .= $value . PHP_EOL;
   }
   return $list;

            
        // Display each item and a newlines
        
    // Return string of list items separated by newlines.
    // Should be listed [KEY] Value like this:
    // [1] TODO item 1
    // [2] TODO item 2 - blah
    // DO NOT USE ECHO, USE RETURN
    }

// Get STDIN, strip whitespace and newlines, 
// and convert to uppercase if $upper is true

// IN 8 LINES OF CODE, WE 
// As programmers, we prepare recipies, we solve the problem. 
    // and We get to say "I did that."
    // Difference between a GOOD developer and a GREAT developer
    // 
    // the litmus test is if the developer writes code 
    // for their own curiosity, fun, and experiments, and limit testing
    // Good developers write code even when they're not being paid for it.


function get_input($upper = FALSE) {

   $input =  (trim(fgets(STDIN)));

    if ($upper) {

       return strtoupper($input);
    
    } else {
        return $input;
    }

    // Return filtered STDIN input
    }
}

// When User creates a new item for the list
// Write a function that prompts the user 
// if they want to add their element to the TOP of the list 
// or the BOTTOM of their list



// The loop!
do { 
    echo list_items($items);

    // Show the menu options
    echo '(N)ew item, (R)emove item, (SO)rt, (Q)uit : ';

    // Get the input from user
    // Use trim() to remove whitespace and newlines
    $input = get_input(TRUE);

    // Check for actionable input
    if ($input == 'N') {
        // Ask for entry
        echo 'Enter item: ';
        // Add entry to list array
        $items[] = get_input();

        // Ask the user if they want to add their item to the 
        // TOP of the list or to the Bottom of the list

        // if input is set or if input contains a value



    } elseif ($input == 'R') {
        // Remove which item?
        echo 'Enter item number to remove: ';
        // Get array key
        $key = get_input();
            $key--;
        // Remove from array
        unset($items[$key]);
        //move all items in list to lower empty keys
        $items = array_values($items);

    } elseif ($input == 'SO') {

         echo '(A)-Z, (Z)-A,?: ';

         $sort_command = get_input(TRUE);

            if ($sort_command == 'A') {
                     
                sort($items);

            } elseif ($sort_command == 'Z') {

                rsort($items);
            }
        }
            


    
    // elseif ($input == 'S') {

    //     write_file($content);
    // }

// Exit when input is (Q)uit
} while ($input != 'Q');

// Say Have a Nice Day!
echo "Have a Nice Day!\n";

// Exit with 0 errors
exit(0);







?>