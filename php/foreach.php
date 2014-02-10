<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach($things as $item) {
	
	if (is_int($item)) {
		echo "{$item} is an integer.\n";
	
	} elseif (is_float($item)) {
		echo "{$item} is a float.\n";
	
	} elseif (is_bool($item)) {
		echo "{$item} is a boolean.\n";
	
	} elseif (is_array($item)) {
		echo "{$item} is an array.\n";
	
	} elseif (is_null($item)) {
		echo "{item} is a null.\n";
	
	} elseif (is_string($item)) {
		echo "{$item} is a string.\n";
	}
}


// $animal_types = array('dogs', 'cats', 'birds', 'narwhals');
// foreach ($animal_types as $animal) {
//     echo "Old McDonald had a farm, and on that farm he raised some {$animal}\n";
// }

/*foreach ($data as $item) {
	if (is_numeric($item)) {
		echo "{$item} is a number \n";
	} elseif (is_string($item)) {
		echo "{$item} is a string\n";
	} else {
		echo "{$item} is not a string or a number\n";
	}
}*/


?>