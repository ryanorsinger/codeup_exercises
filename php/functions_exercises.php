<?php

// uses print_r or var_dump on an array

function inspect($variable = null, $dump = true) {
	// Same as saying if ($dump == true) {...}
	if ($dump) {
		var_dump($variable);
	} else {
		print_r($variable);
	}
}

