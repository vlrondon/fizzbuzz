<?php
	
	use App\FizzBuzz;
	
	include_once './vendor/autoload.php';
	for ($i = 1; $i <= 100; $i++) {
		$fizzBuzz = new FizzBuzz();
		echo $fizzBuzz->evaluate($i) . PHP_EOL;
	}