<?php

// if stuff in the parynthesis is true, then do stuff in the brackets

$a = 1;
$b = 2;

function paramsArevalid($a, $b) {
	if (is_numeric($a)) && (is_numeric($b)) {
		return TRUE;
	} else {
		return FALSE;
	}
} 








function paramsarevalid($a, $b) {
	if ((!is_numeric($a)) || !is_numeric($b)) {
		return TRUE;
	} else {
		return FALSE;
	}
}

function add($a, $b) {
	if (paramsarevalid == TRUE) {
		return $a + $b;
	} else {
		return 0;
	}
}


function add($a, $b) {
// add validation
	
	return $a + $b;
}