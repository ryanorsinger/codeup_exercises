<?php

echo "What is your first name? ";

$first_name = fgets(STDIN);

fwrite(STDOUT, "Howdy $first_name");

?>
