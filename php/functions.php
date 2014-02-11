<?php
// fwrite(STDOUT, "Please input the first number." . PHP_EOL);
// Promp the user for two arguments, their two numbers.

fwrite(STDOUT, "Input your first number." . PHP_EOL);
$num1 = fgets(STDIN);

// Prompt the user for their second number
fwrite(STDOUT, "Input your second number." . PHP_EOL);
$num2 = fgets(STDIN);

// Use INTVAL to change the user input variables $num1 and $num2 to integers.
// Is there a more pragmatic, easier to read, or more commonly used method to do the same thing?

$a = intval ($num1);
$b = intval ($num2);
$a = 1;
$b = 1;
$c = "test";

echo "\$a an outside function is $a\n";
echo "\$c an outside function is $c\n";

// The function only knows the things (arguments) that you pass into it.

function add($a, $b) {

	echo "\$a inside the function is $a\n";
	echo "\$b inside the function is $b\n";
//	echo "\$c inside the function is $c\n";
	// echo var_dump($a) . PHP_EOL;
	// echo var_dump($b) . PHP_EOL;
	// echo var_dump($c) . PHP_EOL;

	echo ($a + $b);
}

add($a, $b);

?>