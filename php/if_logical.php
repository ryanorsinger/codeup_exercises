// Comments that are added before the php tag show up when you run the php. Just like this.

<?php

// Control structures become more powerful when combined 
// with comparison and logical operators
// This exercise is for the Control Structures I unit in app.codeup.com

$x = 0;
$y = 5;
$z = 10;

// if $x < $y < $z then echo "{$x} < {$y} < {$z}\n"


if (($x < $y) && ($y < $z)) {
	echo "{$x} < {$y} <{$z}\n";
} 

// if $x is greater than 0 or less than 10, echo the result as a sentence 
// "$x is greater than 0 or less than 10".

if (($x > 0) || ($x < 10)) {
	echo "$x is greater than 0 or less than 10\n";
}

// repeat the if statement for $y and $z
if (($y > 0) || ($y < 10)) {
	echo "$x is greater than 0 or less than 10\n";
}

// repeating the statement for $z
if (($z > 0) || ($z < 10)) {
	echo "$z is greater than 0 or less than $z\n";
} 

// If $x is greater than 0 AND less than 10, echo the result as the sentence
// "$x is greater than 0 AND less than 10".

if (($x > 0) && ($x < 10)) {
	echo "$x is greater than 0 AND less than 10\n";
}

// repeat the if statement for $y
if (($y > 0) && ($y < 10)) {
	echo "$y is greater than 0 AND less than 10\n";
}

// repeat the if statement for $z
if (($y > 0) && ($y < 10)) {
	echo "$y is greater than 0 AND less than 10\n\n\n";
}

// this was created by typing directly the example text from the http://app.codeup.com/students/units/43/sub_units/157 exercise
// So the habit we're drilling and conditioning and exercising here is the habit of planning things out with verbose comments.
// And we want the verbose comments to reflect a natural language interpretation of what we want our code to do.
// This forces us to do the thinking part and the logic part first.
// We have to be able to state in plain natural language what we want to happen.
// We can do very complicated things and solve very big problems with lots and lots of really small decisions
// Then the "coding" part of what we do is to convert natural language interpretation 

?>