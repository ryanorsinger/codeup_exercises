<?php

// This is the Array_push example
// Array Push pushes one or more elements onto an array 
	// next version of this will have
	// a prompt to the user to enter array elements
	// with a function for input error checking
		// version 2.5 checks 
		// if a function produced expected from the last function?
		// or am I being a spazz here?

// $items = ['First', 'Second', 'Third'];
// array_push($items, 'Ass', 'Titties', 'Lovely lady lumps');
// print_r($items);


// ARRAY POP
// array_pop() pops off the element at the end of an array.
// pop means to both return the value of the element and remove that element from the array
// the following example of shifting is great!

$items = ['Primi', 'Secundo', 'Tri', 'Tetra', 'Pente'];

echo "The following line does print_r on the items array before the array_shift happens \n";

print_r($items) . PHP_EOL;

$first_item = array_shift($items);

echo "and the line below does print_r on \$first_item which = array_shift(\$items) \n";

print_r($first_item) . PHP_EOL;

ehco "\	 the line below does print_r on \$items \n";

print_r($items) . PHP_EOL;







// $array = [1,2,3,4,5,6,7];

// $popped = array_pop($array);

// $popped2 = array_pop($popped);

// // array_pop returns the element off the end of the array
// // array_pop also removes it from the array

// echo "popped is var_dumped";
// var_dump($popped);

// echo "array" . PHP_EOL;
// var_dump($array) . PHP_EOL;


// var_dump($popped2) . PHP_EOL;

// ?>