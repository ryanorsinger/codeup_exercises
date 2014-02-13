<?php

// if we have a string and want to convert it into an array
// we can use explode() the string into an array

// explode()

// declare the string
$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

//explode the string using ',' as the delimeter
// we initialize a new variable set to the return of explode(string)
$physicists_array = explode(', ', $physicists_string);

$physicists_string = implode('|', $physicists_array);
var_dump($physicists_string);

?>