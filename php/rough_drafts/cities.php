<?php

$filename = 'cities.txt';

//The "r" argument for fopen 
$handle = fopen($filename, "r");
$contents = fread($handle, filesize($filename));
		 //handle set at r means from the beginning, to filesize(filename) means the end
		 // this means we start reading and read till the last byte.

$contents_array = explode("\n", $contents);
// so now $contents_array contains the entire file as a string.

fclose($handle);

 echo "\nI can echo \$contents after the handle is closed. \nAnd this is very good news!\n";

print_r($contents_array);

?>