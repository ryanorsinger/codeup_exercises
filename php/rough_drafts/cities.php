<?php



echo "\n" . "\n" . "\n";
$filename = 'cities.txt';
	$handle = fopen($filename, "r");
	$contents = fread($handle, filesize($filename));
	$contents_array = explode("\n", $contents);
	fclose($handle);

	print_r($contents_array);





?>