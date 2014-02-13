<?php

// Array_push example
// $items = ['First', 'Second', 'Third'];
// array_push($items, 'Fourth', 'Fifth', 'Sixth');
// print_r($items);

// array_pop() pops off the element at the end of an array.
// pop means to both return the value of the element and remove that element from the array
// the following example of shifting is great!

$items = ['Primi', 'Secundo', 'Tri', 'Tetra', 'Pente'];

echo "The following line does print_r on the items array before the array_shift happens \n";

print_r($items) . PHP_EOL;

$first_item = array_shift($items);

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