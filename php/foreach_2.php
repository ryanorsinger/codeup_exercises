<?php

$books = array(
    'The Hobbit' => array(
        'published' => 1937,
        'author' => 'J. R. R. Tolkien',
        'pages' => 310
    ),
    'Game of Thrones' => array(
        'published' => 1996,
        'author' => 'George R. R. Martin',
        'pages' => 835
    ),
    'The Catcher in the Rye' => array(
        'published' => 1951,
        'author' => 'J. D. Salinger',
        'pages' => 220
    ),
    'A Tale of Two Cities' => array(
        'published' => 1859,
        'author' => 'Charles Dickens',
        'pages' => 544
    )
);

// this array is an associative array.
// I have key => value pairs
// Normally, I want to use the $key and $value practice
// In this case, it's better to be descriptive
// So I'm naming the $key as $title and the $value as $book

foreach($books as $title => $book) {
	echo $title . "\n";

	foreach ($book as $key => $value) {
		echo $key . " " . $value . "\n";
	}

}
	



// First exercise is to create a loop that iterates through each book
// Then iterates through each book's keys and values.

// Have it output the book's title
// then list the key value pairs 





// 	foreach (array_expression as $key => $value) {
//  	   statement
// 	}

// $numbers = array(1, 2, 3, 4, 5);
// foreach ($numbers as $key => $value) {
//     echo ("\$value has a key of {$key} and a value of {$value}\n");
// }
// Now our output is more descriptive:

// $value has a key of 0 and a value of 1
// $value has a key of 1 and a value of 2
// $value has a key of 2 and a value of 3
// $value has a key of 3 and a value of 4
// $value has a key of 4 and a value of 5


?>