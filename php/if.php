<?php

// if (expression evaluates as TRUE) then {
// 				then do what's in the brackets }


$a = 5;
$b = 10;
$c = 10;

if ($a == $b) {
	echo "$a is equal to $b\n";
} else {
	echo "$a is not equal to $b\n";
	}

if ($a < $b) {
    // output the appropriate result
    echo "$a is less than $b\n";
} else {
	echo "$a is greater than $b\n";
	}

if ($b >= $c) {
    // output the appropriate result
    echo "$b is greater than or equal to $c\n";
} else {
	echo "$b is not greater or equal to $c\n";
}

if ($b <= $c) {
    echo "$b is less than or equal to $c\n";
} else {
	echo "b is not less than or equal to $c\n";
}

if ($b == $c) {
    // output the appropriate result
    echo "$b is equal to $c\n";
} else {
	echo "$b is not equal to $c\n";
}

if ($b === $c) {
    // output the appropriate result
    echo "$b is identical to $c\n";
} else {
	echo "$b is not identical to $c\n";
	}




?> 