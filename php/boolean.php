<?php

// $truth_table = ['TRUE && TRUE' => TRUE,
// 			 	'TRUE && FALSE' => FALSE,
// 			 	'FALSE && TRUE' => FALSE,
// 			 	'FALSE && FALSE' => FALSE]
// I'M WASTING TIME WITH THESE AVOIDANCE BEVHAVIORS.

// TRUE && TRUE === TRUE
// TRUE && FALSE === FALSE
// FALSE &&& TRUE === FALSE
// FALSE &&& FALSE === FALSE


// TRUE || TRUE === TRUE
// TRUE || FALSE === TRUE
// FALSE || TRUE === TRUE
// FALSE || FALSE === FALSE
echo "\n" . PHP_EOL. PHP_EOL;

$truth_table_and =<<< AND
TRUE && TRUE === TRUE
TRUE && FALSE === FALSE
FALSE && TRUE === FALSE
FALSE && FALSE === FALSE
AND;

$truth_table_or =<<< OR
TRUE || TRUE === TRUE
TRUE || FALSE === TRUE
FALSE || TRUE === TRUE
FALSE || FALSE === FALSE
OR;

echo $truth_table_and . "\n\n". $truth_table_or . PHP_EOL . PHP_EOL . PHP_EOL;


?>