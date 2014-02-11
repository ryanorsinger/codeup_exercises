<?php

echo "What is your first name? ";

$firstname = fgets (STDIN);

fwrite(STDIN, "Hello and welcome to CodeUp, " . $firstname);

echo "\n";

?>