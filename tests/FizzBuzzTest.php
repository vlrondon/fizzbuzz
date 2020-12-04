<?php
	
	namespace Tests;
	
	use App\FizzBuzz;
	use PHPUnit\Framework\TestCase;
	
	class FizzBuzzTest extends TestCase
	{
		public function testMultiplesOfThree(): void
		{
			$fizzBuzz = new FizzBuzz();
			
			$result = $fizzBuzz->evaluate(3);
			self::assertEquals('Fizz', $result);
			$result = $fizzBuzz->evaluate(9);
			self::assertEquals('Fizz', $result);
		}
		
		public function testMultiplesOfFive(): void
		{
			$fizzBuzz = new FizzBuzz();
			
			$result = $fizzBuzz->evaluate(5);
			self::assertEquals('Buzz', $result);
			$result = $fizzBuzz->evaluate(10);
			self::assertEquals('Buzz', $result);
		}
		
		public function testMultiplesOfThreeAndFive(): void
		{
			$fizzBuzz = new FizzBuzz();
			
			$result = $fizzBuzz->evaluate(15);
			self::assertEquals('FizzBuzz', $result);
			$result = $fizzBuzz->evaluate(30);
			self::assertEquals('FizzBuzz', $result);
		}
		
		public function testNormalNumbers(): void
		{
			$fizzBuzz = new FizzBuzz();
			
			$result = $fizzBuzz->evaluate(1);
			self::assertEquals('1', $result);
			$result = $fizzBuzz->evaluate(2);
			self::assertEquals('2', $result);
		}
	}
