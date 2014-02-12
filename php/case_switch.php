<?php
//switch

echo "It is important to understand how the switch statement is executed in order to avoid mistakes. \nThe switch statement executes line by line (actually, statement by statement). \nIn the beginning, no code is executed. \nOnly when a case statement is found with a value that matches the value of the switch expression does PHP begin to \nexecute the statements. PHP continues to execute the statements until the end of the switch block, or the first time it sees a break statement. ";

echo "If you don't write a break statement at the end of a case's statement list, PHP will go on executing the statements of the following case. For example:


Variable handling Functions ¶

Table of Contents ¶

boolval — Get the boolean value of a variable
debug_zval_dump — Dumps a string representation of an internal zend value to output
doubleval — Alias of floatval
empty — Determine whether a variable is empty
floatval — Get float value of a variable
get_defined_vars — Returns an array of all defined variables
get_resource_type — Returns the resource type
gettype — Get the type of a variable
import_request_variables — Import GET/POST/Cookie variables into the global scope
intval — Get the integer value of a variable
is_array — Finds whether a variable is an array
is_bool — Finds out whether a variable is a boolean
is_callable — Verify that the contents of a variable can be called as a function
is_double — Alias of is_float
is_float — Finds whether the type of a variable is float
is_int — Find whether the type of a variable is integer
is_integer — Alias of is_int
is_long — Alias of is_int
is_null — Finds whether a variable is NULL
is_numeric — Finds whether a variable is a number or a numeric string
is_object — Finds whether a variable is an object
is_real — Alias of is_float
is_resource — Finds whether a variable is a resource
is_scalar — Finds whether a variable is a scalar
is_string — Find whether the type of a variable is string
isset — Determine if a variable is set and is not NULL
print_r — Prints human-readable information about a variable
serialize — Generates a storable representation of a value
settype — Set the type of a variable
strval — Get string value of a variable
unserialize — Creates a PHP value from a stored representation
unset — Unset a given variable
var_dump — Dumps information about a variable
var_export — Outputs or returns a parsable string representation of a variable




