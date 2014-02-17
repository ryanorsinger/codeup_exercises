<?php

$data_types = array(
			"boolean" => "True or False",
			'integer' => "Counting numbers",
			'float' => "floating point number",
			'double' => "same as saying float",
			'string' => "string is a string of characters",
			'array' => "an array is an ordered map that associates values to keys",
			'object' => "an instance of a class where the object can be a combination of variables, functions, and data structures",
			'resource' => "a special variable holding a reference to an external resource.",
			'NULL' => "NULL is simply NULL");

echo "There are 8 primitive data types in PHP" . PHP_EOL;

foreach($data_types as $key => $value) {
	echo $key . ' ' . $value . PHP_EOL;
}

echo "\n";
echo "A valid variable name starts with a letter or underscore, \n";
echo "followed by any number of letters, numbers, or underscores.\n";
echo "Programming languages use variables to refer to data stored in memory\n";
echo "\nWe assign variables with an equals sign\n";
echo "We can use` variables like we would any data type\n";

echo "\n\n var_dump($variable) allows us to see inside any variable, know the value, and get the data type\n";

?>
