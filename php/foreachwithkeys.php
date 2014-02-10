<?php

$data = array('first_name' => 'Jason', 'last_name' => 'Straughan');

foreach($data as $key => $data_point) {
	echo "{$key} has a value of {$data_point}\n";
}



// So below is a way of using foreach to grab the values of the array
/*foreach ($data as $data_point) {
	echo "$data_point\n";
}*/

?>