<?php

// example 1 from CONTROL STRUCTURES II 3 of 5

$students = array(
    array('name' => 'Virginia Potts', 'age' => 29),
    array('name' => 'Elon Musk', 'age' => 42),
    array('name' => 'Rasmus Lerdorf', 'age' => 45),
    array('name' => 'Marissa Mayer', 'age' => 38)
);

foreach($students as $student) {
	foreach ($student as $key => $value) {
		echo "Student's $key is $value\n";	
	}
}

?>