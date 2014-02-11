<?php

// The second version of this document. 
// This second version of if.php is the exercise for Control Structures I
// see http://app.codeup.com/students/units/43/sub_units/158 for details

$a = 5;
$b = 10;
$c = 2;

// Shorten the next 2 statements into an if/else
// if ($a < $b) {
    // output the appropriate result
//    echo "$a is less than $b";
//}

// if ($a > $b) {
    // output the appropriate result
//    echo "$a is greater than $b";
//}

// This is the way to do it with else
echo "\n The following results are from doing the exercise with else only\n";
if ($a < $b) {
	echo "$a is less than $b\n\n";
} else {
	echo "$a is less than $b\n\n";
}

// This is the way to evaluate with elseif
echo "The following results are from doing the exercise with elseif";
if ($a < $b) {
	echo "\n";
	echo "$a is less than $b\n";
} elseif ($a > $b) {
	echo "$a is greater than $b\n\n";
}

// This is the way to evaluate the exercise using the ternary operator
// Be careful with using too many ternary operators too much of the time
// Focus on code readability

echo "\n The following results are from doing the exercise using ternary operator\n";
echo $a < $b ? "$a is less than $b\t" : "$a is not equal to $b\n";
echo "\n\n";

if ($b >= $c) {
	// output appropriate result
	echo "$b is greater than or equal to $c\n";
} elseif ($b <= $c) {
	echo "$b is less than or equal to $c\n";
}

// combine 4 conditionals into one if/else/elseif block that 
// checks in order for: identical, equal, not identical, not equal
echo "\n\t This is using elseif / else if to work out the exercise\n";
if ($b === $c) {
	echo "\n$b is identical to $c\n";
} elseif ($b == $c) {
	echo "\n$b is equal to $c\n";	
} elseif ($b !== $c) {
	echo "\n$b is not identical to $c\n";
} elseif ($b != $c) {
	echo "\n$b is not equal to $c\n";
}

//Now let's try this with Ternary Operators

// echo "\n\n\t working this with a ternary operator yields the following result\n";

// echo ($a===$b) ? echo "$a is identical to $b" : echo "$a is not identical to $b\n";
// echo ($a==$b) ? echo "$a is equal to $b" : echo "$a is not equal to $b\n";
// echo ($a < $b) ? echo "$a is less than $b" : echo "$a is not less than $b";
// echo ($a <= $b) echo "$a is less than or equal to $b" : echo "a is not less than or equal to $b";




?>

