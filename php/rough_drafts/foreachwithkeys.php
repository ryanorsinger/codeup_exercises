<?php

$instructors = array(
	array('first_name' => 'Jason', 'last_name' => 'Straughan'),
	array('first name' => 'Isaac', 'last_name' => 'Castillo')
	);

foreach ($instructors as $instructor) {
		foreach($instructor as $key => $name) {
			echo "$name\n";
		}
}


/*foreach($data as $key => $data_point) {
	if ($key = 'first_name')
	echo "{$key} has a value of {$data_point}\n";
}
*/


// So below is a way of using foreach to grab the values of the array
/*foreach ($data as $data_point) {
	echo "$data_point\n";
}*/

?>