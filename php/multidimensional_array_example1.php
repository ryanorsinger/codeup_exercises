<?php

$students = array(
    array('name' => 'Virginia Potts', 'age' => 29),
    array('name' => 'Elon Musk', 'age' => 42),
    array('name' => 'Rasmus Lerdorf', 'age' => 45),
    array('name' => 'Marissa Mayer', 'age' => 38)
);

foreach($students as $student) {
	echo "{$student['name']} is {$student['age']} years old.\n";
}

?>