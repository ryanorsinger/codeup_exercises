<?php

//if it's numeric, go return the goods
function get_input($input) {
	$input = fgets(STDIN);
	$value = trim($input);
	if (is_numeric($value)) {
		return $value;
	}
}


fwrite(STDOUT, 'What is the value of $a' . PHP_EOL);

$a = get_input($a);

fwrite(STDOUT, 'What is the value of $b' . PHP_EOL);

$b = get_input($b);

fwrite(STDOUT, 'What is the value of $c' . PHP_EOL);

$c = get_input($c);

echo "\n\n\n";

if ($a == $b) {
	echo "$a is equal to $b\n";
} else {
	echo "$a is not equal to $b\n";
	}

if ($a < $b) {
    // output the appropriate result
    echo "$a is less than $b\n";
} else {
	echo "$a is not less than $b\n";
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