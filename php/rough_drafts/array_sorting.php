<?php

// sorting arrays practices

    $names = array(
    	
        '0' => 'Marc Andreessen',
        '1' => 'Tim Berners-Lee',
        '2' => 'Len Bosack',
        '3' => 'Steve Case',
        '4' => 'Vint Cerf',
        '5' => 'Len Kleinrock',
        '6' => 'J.C.R. Licklider',
        '7' => 'Bob Metcalfe',
        '8' => 'Ray Tomlinson',
    );

foreach($name as $key => $value) {	

	print_r({$names} . ' ' . {$key} . ' ' . {$value};
}