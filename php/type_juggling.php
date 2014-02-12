<?php

// PHP allows for type juggling.
// BUT DON'T DEPEND ON IT. THIS IS A ROUTE TO DISASTER!

echo "\$some_string = 'Hello!' \n";
$some_string = "Hello!";
var_dump($some_string);
echo "\n";

echo "\$some_var = 1" . "\n";
$some_var = 1;
var_dump($some_var);
echo "\n";

echo "Cast the \$some_var int by doing var_dump((bool) \$some_var \n";
echo var_dump((bool) $some_var);


?>