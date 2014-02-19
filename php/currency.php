<?php

echo "Welcome to the Currency Converter! \n";

$dollar_to_euro = 0.73;
$dollar_to_pounds = 0.60;
$dollar_to_pesos = 13;


fwrite(STDOUT, "Enter the amount that you want to convert: $" . PHP_EOL);
$dollar_amount = trim(fgets(STDIN));

fwrite(STDOUT, "What currency do you want to convert to? (E)uros, (P)esos, (B)ritish Pounds \n");
$currency_choice = trim(fgets(STDIN));

	switch($currency_choice) {
		case "E":
		case "e":
			$euros = $dollar_amount * $dollar_to_euro;
			echo "$dollar_amount is equivalent to $euros Euros\n";
			break;
		case "P":
		case "p":
			$pesos = $dollar_amount * $dollar_to_pesos;
			echo "$dollar_amount is equivalent to $pesos pesos\n";
			break;
		case "B":
		case "b":
			$pounds = $dollar_amount * $dollar_to_pounds;
			echo "$dollar_amount is equivalent to $pounds British pounds\n";
			break;
	}

?>