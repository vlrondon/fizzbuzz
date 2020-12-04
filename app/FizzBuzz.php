<?php
	
	
	namespace App;
	
	
	final class FizzBuzz
	{
		/**
		 * @param $number
		 * @return string
		 */
		public function evaluate($number): string
		{
			if ($number % 15 === 0) {
				return "FizzBuzz";
			}
			
			if ($number % 3 === 0) {
				return "Fizz";
			}
			
			if ($number % 5 === 0) {
				return "Buzz";
			}
			
			return $number;
		}
	}