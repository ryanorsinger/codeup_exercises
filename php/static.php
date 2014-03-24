<?php

class Hello {

	public static $defaultMessage = "Hello, World!";

	public static function doSomething() {
		echo "No problemo \n";
	}

	public function sayHello($to = null) {
		if (!empty($to)) {
			echo "Hello, $to!" . PHP_EOL;
		} else {
			echo self::$defaultMessage . PHP_EOL;
		}
	}
}

Hello::doSomething();

//echo Hello::$defaultMessage . PHP_EOL;

// $h1 = new Hello();
// $h2 = new Hello();

// $h1->defaultMessage = "Hello, Class!";

// Hello::$defaultMessage = "Hello from Static Attribute \n";

// $h1->sayHello("Codeup");
// $h1->sayHello();

// $h2->sayHello("Codeup");
// $h2->sayHello();


// echo $h1->defaultMessage . PHP_EOL;
// $h1->defaultMessage = "Hello, Codeup!";

// echo $h1->defaultMessage . PHP_EOL;
// echo $h2->defaultMessage . PHP_EOL;

